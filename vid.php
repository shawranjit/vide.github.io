
 <?php



if(isset($_GET['submit'])){

error_reporting(0);


$reff= $_GET['reff'];


function RandomNumber($length)
{
$str="";
for($i=0;$i<$length;$i++){
$str.=mt_rand(0,9);
}
return $str;
}
$n = array('charan','raaghu','sumit','chandru','rishab','tanmay','ravi','riya','deepak','shashi','revanth','smitha','gowri','arun','arpitha','anusha','chinmay','thilak','manu','mithun','rahul','abhishek','kavya','kavitha','savitha','sachin','manohar','ajay','anurag','madhu','kushal','anil','askash','yogesh','vidya','rajesh','sagar','madhan','vishal','ramya','riyanth','ravishankar','radha','raju','sudha','avinash','fidju','arihanth','babu','priya','preethi','priyanka','preetham','suman','sunitha','tanu','manu','mahesh','mahendra','manoj','vikas','abhinav','arya','raaghu','sumit','chandru','rishab','tanmay','ravi','riya','deepak','shashi','revanth','smitha','gowri','arun','arpitha','anusha','chinmay','thilak','manu','mithun','rahul','abhishek','kavya','kavitha','savitha','sachin','manohar','ajay','anurag','madhu','kushal','anil','askash','yogesh','vidya','rajesh','sagar','madhan','vishal','ramya','riyanth','ravishankar','radha','raju','sudha','avinash','fidju','arihanth','babu','priya','preethi','priyanka','ananth','sumana','saritha','yogesh','razz');
$t = array('Singh','Shaw','raut','gupta','anjali','gopal','anda','jhanda','ganda','manda','unda','kanda','yadav','fadav','madhav','hand','we','should','always','wash','our','hands','carefully','so','we','can','fight','against','the','corona','virus','choudhary','trivedi','chaturvedi','paasi','verma','berma','bahubali','devsena','kattapa','bhalal','shiva','war','baghi','modi','gandhi','kumar','kaalkey','panchvedi','chatvedi','kohli','tendulkar','serma','bumrah','chahal','dhavan','raina','khan','kaif','kapoor','devi','debi','shrof','chain','trump','gayl','rasal','aastin','lemark','darwin','roshan','dhoni','das','kewat','dev','gabbar','jahangiri','mahato','chandargupt','mahagupt','mahi','devdas','tanti','shankar','rudra','aajad','bose','nehru','pandit','kanti','baai','charan','kumari','amar','aayar','laal','gada','mehta','bide','lee','donaldo','mahendra','amarendra','sakti','gamini','kamini','hari','jaiswal','singhania','harijan','soni','sonar','deshmukh','upadhaya','padukar','padukon','dhooper','kurana','mehra','lutra','chawala','nigam','lehri','thakur','datt','khaton','sinha','shaha','kalawati','sima','hatela','daku','devil','ghosh','mandal','mondal','rajsingh','paswaan','reddy','panday','jaykar','sarkaar','nisha','prasad','mohmad','ansari','roy','ray');
$fname = $n[mt_rand(0,count($n))];	
$ftitle = $t[mt_rand(0,count($t))];	


$f=RandomNumber(2);
$imei=RandomNumber(21);
$device=RandomNumber(15);

	
$url6="http://vidstatus.tpc.studio/api/user/register/4F5A9C3D9A86FA54EACEDDD635185/16edd7cf-2525-485e-b11a-3dd35f382457/";

$data6="name=$fname $ftitle&username=$imei&password=$imei&type=google&image=https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg";

$headers6=['Content-length: '.strlen($data6).'','Authorization: '.$tkn.'','Content-Type: application/x-www-form-urlencoded','Host: vidstatus.tpc.studio','Connection: Keep-Alive',];

 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL,$url6);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS,$data6);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers6);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 $output6= curl_exec ($ch);
 $json6=json_decode($output6,true);
 curl_close ($ch);



$id=$json6["values"]["0"]["value"];
$token=$json6["values"]["5"]["value"];

	echo $id;
$url7="http://vidstatus.tpc.studio/api/user/code/4F5A9C3D9A86FA54EACEDDD635185/16edd7cf-2525-485e-b11a-3dd35f382457/";

$data7="user=$id&key=$token&code=$reff";

$headers7=['Content-length: '.strlen($data7).'','Authorization: '.$tkn.'','Content-Type: application/x-www-form-urlencoded','Host: vidstatus.tpc.studio','Connection: Keep-Alive',];

 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL,$url7);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS,$data7);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers7);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 $output7= curl_exec ($ch);
 $json7=json_decode($output7,true);
 curl_close ($ch);
$msg=$json7["message"];



#echo "<meta http-equiv='refresh' content=0;' />"; 
  




   
}
	if(!isset($_GET['submit'])){
		
		
		echo'<center>
<form method="get" action=""><font color="brown" size="2">Enter Your Refer Code</font> <label></label>
<input type="text" name="reff" placeholder="Your Refer Code"><input type="submit" class="submit" name="submit" value="Register"></font></div></fieldset>
';

}
  
?><hr style='border: 1px dotted red;'><center><a href='https://t.me/AADARSHSHAW'><font color='white' size='3'>JOIN MY TELEGRAM CHANNEL FOR SCRIPT</font></a></center></form></div></form></div>
<meta http-equiv='refresh' content=0;url=vide.php?reff=a8b64f89&submit=Register ><hr><center><a href="https://telegram.dog/hidemyscript">