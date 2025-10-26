<?php
session_start();
include 'koneksi.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user data
    $nama = $_POST['nama'];
    $jenis_komputer = $_POST['jenis_komputer'];
    
    // Check if gejala is selected
    if (!isset($_POST['gejala']) || empty($_POST['gejala'])) {
        $_SESSION['error'] = "Anda belum memilih gejala. Silakan pilih minimal satu gejala.";
        header("Location: diagnosa.php");
        exit();
    }
    
    // Get selected symptoms
    $selected_gejala = $_POST['gejala'];
    
    // Store user data in session
    $_SESSION['user_data'] = [
        'nama' => $nama,
        'jenis_komputer' => $jenis_komputer
    ];
    
    // Store selected symptoms in session
    $_SESSION['selected_gejala'] = $selected_gejala;
    
    // Forward Chaining Algorithm
    // 1. Get all rules from database
    $query_rules = "SELECT * FROM tb_rule";
    $result_rules = mysqli_query($koneksi, $query_rules);
    
    $rules = [];
    while ($row = mysqli_fetch_assoc($result_rules)) {
        $rules[] = [
            'id_rule' => $row['id_rule'],
            'kode_rule' => $row['kode_rule'],
            'if_gejala' => explode(',', $row['if_gejala']),
            'then_kerusakan' => $row['then_kerusakan']
        ];
    }
    
    // 2. Match selected symptoms with rules
    $matched_rules = [];
    $matched_count = [];
    
    foreach ($rules as $rule) {
        $match_count = 0;
        $total_gejala_in_rule = count($rule['if_gejala']);
        
        foreach ($selected_gejala as $gejala) {
            // Get kode_gejala for the selected gejala id
            $query_gejala = "SELECT kode_gejala FROM tb_gejala WHERE id_gejala = $gejala";
            $result_gejala = mysqli_query($koneksi, $query_gejala);
            $row_gejala = mysqli_fetch_assoc($result_gejala);
            $kode_gejala = $row_gejala['kode_gejala'];
            
            if (in_array($kode_gejala, $rule['if_gejala'])) {
                $match_count++;
            }
        }
        
        // Calculate match percentage
        $match_percentage = ($match_count / $total_gejala_in_rule) * 100;
        
        if ($match_count > 0) {
            $matched_rules[$rule['then_kerusakan']] = $match_percentage;
            $matched_count[$rule['then_kerusakan']] = $match_count;
        }
    }
    
    // 3. Find the best match (highest percentage)
    if (!empty($matched_rules)) {
        arsort($matched_rules); // Sort by percentage (descending)
        $best_match_kerusakan = array_key_first($matched_rules);
        $confidence = $matched_rules[$best_match_kerusakan];
        
        // Get kerusakan details
        $query_kerusakan = "SELECT * FROM tb_kerusakan WHERE kode_kerusakan = '$best_match_kerusakan'";
        $result_kerusakan = mysqli_query($koneksi, $query_kerusakan);
        $kerusakan = mysqli_fetch_assoc($result_kerusakan);
        
        // Store diagnosis result in session
        $_SESSION['diagnosis_result'] = [
            'kerusakan' => $kerusakan,
            'confidence' => $confidence,
            'matched_count' => $matched_count[$best_match_kerusakan],
            'timestamp' => date('Y-m-d H:i:s')
        ];
        
        // Redirect to result page
        header("Location: hasil.php");
        exit();
    } else {
        // No match found
        $_SESSION['error'] = "Tidak dapat menentukan kerusakan berdasarkan gejala yang dipilih. Silakan coba lagi dengan gejala yang berbeda.";
        header("Location: diagnosa.php");
        exit();
    }
} else {
    // If accessed directly without form submission
    header("Location: diagnosa.php");
    exit();
}
?>