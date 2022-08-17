 
<?php require_once("Connection.php"); ?>
<?php 
	$keys = array_keys($_REQUEST);	
	 

	
	
	$Insert = '' ;
	$Update = '';
	$KeyInsert = '';
	$strDelete ='';
	$strSelect  = '' ;
	$str = '' ; 

  	foreach($keys as $key)
	{
		$pos = strpos($key , "_X");
		
		
		
		try
		{
				if ($pos != false)
				{
				$word  = str_replace("_X" , "" , $key);
				
				$KeyInsert .=$key.",";
				if ($_REQUEST[$key] == "on")
				{
						$Insert .= "'1' , ";
						$Update .= $word."='1',";
				}
				else
				{
						$Insert .= "'".$_REQUEST[$key]."' , ";
						$Update .= $word."='".$_REQUEST[$key]."',";
				}
				
			
				}
				
		}
			catch (Exception $e) {
				echo json_encode('Caught exception: ',  $e->getMessage(), "\n");
		}
	}

	
	switch ($_REQUEST['status'])
	{
		case 'new' :
			$strInsert = "insert into  ".$_REQUEST['tbl']." (XKeys) values(Xvalues)";
			$KeyInsert  = str_replace("_X" , "" , $KeyInsert);
			$strInsert  = str_replace("Xvalues" , substr($Insert , 0 , strlen($Insert) -2 ), $strInsert) ; 
			$strInsert  = str_replace("XKeys" , substr($KeyInsert , 0 , strlen($KeyInsert) -1 ), $strInsert) ; 
			$strInsert .=";SELECT SCOPE_IDENTITY();" ;
			
			//echo $strInsert ; 
			try{
				$result  = sqlsrv_query($conn, $strInsert) or  die( print_r( sqlsrv_errors(), true));
				sqlsrv_next_result($result);
				sqlsrv_fetch($result);
				$id =  sqlsrv_get_field($result , 0 );
				$arr["id"]  = $id ; 
				$arr["result"] = "Success" ; 
			}
			catch (Exception $e)
			{
				echo json_encode('Caught exception: ',  $e->getMessage(), "\n");
				break;
			}
			echo json_encode($arr);
			
			break ; 
		case 'update' : 
			$strUpdate = "Update ".$_REQUEST['tbl']." set  Xvalues where 1=1 and ".$_REQUEST['Condition'];
			$strUpdate = str_replace("Xvalues" , substr($Update , 0 , strlen($Update) -1), $strUpdate) ; 
			$str = $strUpdate ;	
			$result  = sqlsrv_query($conn, $strUpdate) or  die( print_r( sqlsrv_errors(), true)) ; 
			$arr["result"] = "Success" ; 
			echo json_encode($arr);
			break;
		case 'delete' :
			$strDelete = "delete from ".$_REQUEST['tbl']." where 1 = 1 and ".$_REQUEST['Condition'];
			$str = $strDelete ;	
			$result  = sqlsrv_query($conn, $strDelete) or  die( print_r( sqlsrv_errors(), true)) ; 
			$arr["result"] = "Success" ; 
			echo json_encode($arr);
			break;
		case 'select' :
			
			//echo json_encode($_REQUEST['Condition']);
			
		    $strSelect = "select * from  ".$_REQUEST['tbl']." where 1=1 and ".$_REQUEST['Condition'];
			$result=sqlsrv_query($conn, $strSelect , array() , array("Scrollable" => 'static')) or  die( print_r( sqlsrv_errors(), true)) ;
			$arr=array();
			while($row = sqlsrv_fetch_Object($result)) 	
			{
				$arr[] = $row;
			}
			echo json_encode($arr);	
			break;
			//echo json_encode("enter select"); 
	}
				
	//echo $str;
	
	
	//echo json_encode($str) 
?>