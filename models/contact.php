<?php
class Contact
{
    public function store($name,$email,$phone,$message)
    {
        $sql="INSERT INTO contacts (name,email,phone,message)
        VALUES ('".$name."', '".$email."', '".$phone."', '".$message."')";
        $res=mysql_query( $sql, Connect::con() );
        if( $res  != 1 )
        {
            return 0;
        }else{
            return 1;
        }
  }
}
?>
