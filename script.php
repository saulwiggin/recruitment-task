\Users\usr\dev\third-bridge\recruitment-task*\CmdLineLoader

<?php 
require ('vendor/autoload.php');

class CmdLineLoader
{
	// run the script from the command line - php script.php data/file.csv
	public $filename;
	public $file;
	public $optional_output;

	function start($filename, $optional_output){

		$txt_to_file = array();
		$total_value = 0;

		$file_handle = fopen($filename, "r+");

		if ($optional_output){
			while (!feof($file_handle)) {
			  $line = fgets($file_handle);
			  array_push($txt_to_file, $line);
			  $entry = explode(',',$line);
			   if ($entry[1] == 'true'){
			   		$total_value += $entry[2];
			   }
			}
			$txtfile = fopen($optional_output, "w");
			$text_message = 'print to command line number of active values: ' . $total_value . "\n";
			fwrite($txtfile, $text_message);
			echo "print answer to " . $optional_output . " \n";
		} else {
			while (!feof($file_handle)) {
			   $line = fgets($file_handle);
			   $entry = explode(',',$line);
			   if ($entry[1] == 'true'){
			   		$total_value += $entry[2];
			   }
			}
			echo 'print to command line number of active values: ' . $total_value . "\n";
		}
	}

}
if (count($argv) == 3){
	$optional_output = $argv[2];
	$optional_output = substr($optional_output,9);
	$filename = $argv[1];
	$filename = substr($filename,8);
} else {
	$optional_output = null;
	$filename = $argv[1];
}

$CmdLineLoader = new CmdLineLoader;

$CmdLineLoader->start($filename, $optional_output);

?>