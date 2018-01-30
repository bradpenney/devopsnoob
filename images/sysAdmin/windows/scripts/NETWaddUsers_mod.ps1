#Selects domain and identifies path. 
$objOU=[ADSI]"LDAP://OU=Staff,DC=bapp3200,DC=it,DC=net172,DC=ca"

#Selects input file
$dataSource=import-csv “NETWusers_v2.csv”;

#uses foreach to create multiple users
foreach($dataRecord in $datasource) {
# Sets First name and last name
$cn=$dataRecord.FirstInitial + ” ” + $dataRecord.LastName
# Sets Account Name
$sAMAccountName=$dataRecord.FirstInitial + $dataRecord.LastName
# Sets given name
$givenName=$dataRecord.FirstName
# Sets last (sur)name
$sn=$dataRecord.LastName
# Puts all letters in account name to lower case
$sAMAccountName=$sAMAccountName.ToLower()
# Sets display name
$displayName=$sn + “, ” + $givenName
# Sets the appropriate department
$dept=$dataRecord.Dept
# Adds domain name to account name and calls is userPrincipalName
$userPrincipalName=$sAMAccountName + “bapp.it.net172.ca”;


#Additional Attributes
$objUser=$objOU.Create(“user”,”CN=”+$cn)
#$objUser.Put(“path”,$OU)
$objUser.Put(“sAMAccountName”,$sAMAccountName)
$objUser.Put(“userPrincipalName”,$userPrincipalName)
$objUser.Put(“displayName”,$displayName)
$objUser.Put(“givenName”,$givenName)
$objUser.Put(“sn”,$sn)
$objUser.Put(“description”,$dept)
$objUser.Put(“department”,$dept)

#Places the additional attributes into the record
$objUser.SetInfo()
$objUser.SetPassword(“Student2017”) ;
$objUser.psbase.InvokeSet(“AccountDisabled”,$false)
$objUser.SetInfo()
}