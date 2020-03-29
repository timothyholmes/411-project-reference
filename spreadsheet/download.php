<?PHP
  // Learned from this article https://www.the-art-of-web.com/php/dataexport/
  $db = new SQLite3('../auth.sqlite');

  // Gets all of our student records
  $result = $db->query("SELECT * FROM students");

  // This names the file we're going to download
  $filename = "website_data_" . date('Ymd') . ".xls";

  // This is telling the browser we're goig to download this as an excel file
  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: application/vnd.ms-excel");

  // Echo anything you want at the top of the file first
  echo "that through the information displayed in this report, I have access to confidential student information protected by   
  the Family Educational Rights and Privacy Act of 1974. In accordance with this Act and University policy concerning     
  student records, I understand that unauthorized access, release or re-release of confidential student information is    
  prohibited by law and may result in disciplinary action, including dismissal.\n";

  $fieldList = array("id", "firstname", "major");

  for ($i = 0; $i < count($fieldList); $i++) {
    echo $fieldList[$i] . "\t";
  }

  echo "\n";

  while ($element = $result->fetchArray()) {
    for ($i = 0; $i < count($fieldList); $i++) {
      echo $element[$fieldList[$i]] . "\t";
    }
    echo "\n";
  }

  exit;
?>