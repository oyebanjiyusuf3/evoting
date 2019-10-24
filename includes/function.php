<?php



// VALIDATION FOR MATRIC NUMBER ON AN HTML FORM

function m_validation($matric)
{
$matr = "([f|p]/[h|n]d/[0-9][0-9]/[0-9][0-9][0-9][0-9][0-9][0-9][0-9]$)";
  if (preg_match($matr, $matric)===1) 
  {
  return $matric; 
  }      
}

// VALIDATION FOR AGE ON AN HTML FORM

function a_validation($age)
{
  $ag="([0-9][0-9]$)";
  if (preg_match($ag, $age)===1 && $age<=45)
  {
    return $age;
  } 
}

// DEPARTMENTAL DETECTION FROM MATRIC NUMBER

function department($matric)
{
   $depart=substr($matric, 8,-3);
 if ($depart=='3210')
   {
       $department="computer science";
   }
 elseif($depart=='3340') 
        {
          $department="painting";
        }
 elseif($depart=='3230') 
       {
         $department="mass com";
       }
       return  $department;

     }
     
     
?>