<!DOCTYPE html>
<html>

<head>
<title>Neurotransmitter Receptor</title>
<base href="http://159.226.67.97/student2018/201728012115035/" />

<style>
a{text-decoration:none}
a{color:RGB(0,0,200)}
#header {
    background-color:RGB(245,245,245);
    color:RGB(120,120,120);
    text-align:left;
    padding:5px;
	margin:20px 40px 0px 40px;
}
#section {
	margin:0 auto;
    text-align:left;
    width:550px;
    padding:10px;	 
    margin:0px 10px 20px 10px;	
}
#footer {
    background-color:RGB(237,237,237);
    color:RGB(64,64,64);
    clear:both;
    text-align:center;
    padding:5px;	
	margin:0px 40px 0px 40px;	
}

</style>
</head>


<body>

<div id="header">
<a href='201728012115035.html'>
<img src='logo.png' align='middle' height='40' width='40'/>
</a>
<span style='font-size:20px'>Neurotransmitter Receptor</span>
</div>


<div id="section">
<fieldset>
<h3  align='center'>BLAST Result</h3>
<?php
$file = fopen("blast_query.fa", "w") or die("Unable to open file!");
fwrite($file, $_POST["sequence"]);
fclose($file);
$cmd_query='/home/Ben/software/blast/ncbi-blast-2.6.0*/bin/blastp -query ./blast_query.fa -db ./myblastdb/myblastdb -html -evalue 1e-5 -num_descriptions 10 -num_alignments 10';
system($cmd_query);
?>
</fieldset>
</div>


<div id="footer" style="font-size:12px">
Copyright @ The_Big_Bang_Theory.UCAS
</div>

</body>
</html>