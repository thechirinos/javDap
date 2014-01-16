Copy this line for no SSL: 
<br />
java -jar JavDap.jar -vf 
-p <?php echo $_POST["ldapPort"]; ?> 
-b "<?php echo $_POST["baseDN"]; ?>" 
-a "<?php echo $_POST["bindDN"]; ?>" 
-A <?php echo $_POST["bindPass"]; ?> 
-n <?php echo $_POST["userName"]; ?> 
-P <?php echo $_POST["userPass"]; ?> 
-u <?php echo $_POST["userIDTag"]; ?> 
 <?php echo $_POST["ldapAddr"]; ?>
<br />
<br />
Copy this line for SSL: 
<br />
java -jar JavDap.jar -svf 
-p <?php echo $_POST["ldapPort"]; ?> 
-b "<?php echo $_POST["baseDN"]; ?>" 
-a "<?php echo $_POST["bindDN"]; ?>" 
-A <?php echo $_POST["bindPass"]; ?> 
-n <?php echo $_POST["userName"]; ?> 
-P <?php echo $_POST["userPass"]; ?> 
-u <?php echo $_POST["userIDTag"]; ?> 
 <?php echo $_POST["ldapAddr"]; ?>
<br />
<br />
If the JavDap line is successful, copy/paste this in their system.env
<br />
<br />
#LDAP Setup
<br />
LDAP_ADDR|<?php echo $_POST["ldapAddr"]; ?>|<br />
LDAP_PORT|<?php echo $_POST["ldapPort"]; ?>|<br />
LDAP_LIBR||<b>(get this from the customer)</b><br />
BASE_DN|<?php echo $_POST["baseDN"]; ?>|<br />
BIND|1|<br />
BIND_DN|<?php echo $_POST["bindDN"]; ?>|<br />
BIND_PASSWORD|<?php echo $_POST["bindPass"]; ?>|<br />
LDAP_UACS||<b>(get this from the customer)</b><br />
USER_ID_TAG|<?php echo $_POST["userIDTag"]; ?>|<br />
LDAP_CLRN|NONE|<br />
SSL_AUTHENTICATION|0|<br />
UPPERCASE_USERID|0|<br />
LDAP_ONLY_LOGIN|0|<br />
LDAP_DEBUGGING|1|<br />
<br />
<br />
<h3>A Review of What These Do</h3>
<p>An explanation of the fields found in this form...</p>
<ul>
  <li>
    <div class="label">
      LDAP_ADDR||
    </div>
    <div class="description">
      This is the URL or IP address of the LDAP server.  (Get this information from your LDAP administrator)
    </div>
    <div class="example">
      <div class="label">
        Example:
      </div>
      LDAP_ADDR|10.1.40.294|
    </div>
  </li>
  <br/>
  <li>
    <div class="label">
      LDAP_PORT||
    </div>
    <div class="description">
      This is the port on the LDAP server that e-Library will be communicating with.
      <br />
      -Port 389 is the default port for non-secure communication between LDAP and e-Library.
      <br />
      -Port 636 is the default port for secure communication between LDAP and e-Library.
    </div>
    <div class="example">
      <div class="label">
        Example:
      </div>
      LDAP_PORT|389|
    </div>
  </li>
  <br />
  <li>
    <div class="label">
      BASE_DN||
    </div>
    <div class="description">
      The Base Distinguished name (Get this information from your LDAP administrator)
    </div>
    <div class="example">
      <div class="label">
        Example:
      </div>
      BASE_DN|OU=Staff,DC=pbs,DC=edu|
    </div>
  </li>
  <br />
  <li>
    <div class="label">
      BIND_DN||
    </div>
    <div class="description">
      This is the Distinguished name that LDAP is looking for to bind to it and get permission to search for the user in LDAP. (Get this information from your LDAP administrator)
    </div>
    <div class="example">
      <div class="label">
        Example:
      </div>
      BIND_DN|CN=Sirsi LDAP Account,OU=Accounts,OU=Student Accounts,DC=pbs,DC=edu|
    </div>
  </li>
  <br />
  <li>
    <div class="label">
      BIND_PASSWORD||
    </div>
    <div class="description">
      This is the password needed to authenticate the bind user to search the LDAP (Get this information from your LDAP administrator)
    </div>
    <div class="example">
      <div class="label">
        Example:
      </div>
      BIND_PASSWORD|qtpassword|
    </div>
  </li>
  <br />
  <li>
    <div class="label">
      USER_ID_TAG||
    </div>
    <div class="description">
      This defines what kind of variable in LDAP your LDAP user is.
    </div>
    <div class="example">
      <div class="label">
        Example:
      </div>
      USER_ID_TAG|sAMAccountName|
    </div>
  </li>
</ul>
</div>
