<?php
/**
 * ADBU DB Connector (Includere il seguente file, significa effettuare la connessione al database)
 * 
 * Per eseguire una query generica in un qualsiasi ambiente utilizzare il richiamo al seguente metodo di classe: $array = $DB->Execute('query');
 * 
 * I vari records saranno aggregati in un array della variabile associata al metodo Execute, si otterranno quindi richiamando: $array->fields[indice_array]; 
 * 
 * $DB->IsConnected() riporta un valore booleano true se correttamente connesso al DBENGINE, false in caso contrario.
 * 
 * Inserimento di records in bulk binding: 
$array = array(

         array('Antonio',13),

         array('Luca', 23),

         array('Andrea', 33)

         );
$inserisci = $DB->Execute('insert into anagrafica (nome,anni) values (?,?)',$array);
 * 
 * Per l'invio correttamente formattato di date al database si può utilizzare il seguente metodo: $DB->DBDate(""); 
 * N.B. La data passata da PHP può essere un semplice Unix Timestamp (Es. ("$data")) o una data ISO Format, vale a dire Y-m-d (Es. ("$anno-$mese-$giorno"))
 * 
 * Per l'escape delle stringhe da inserire nel database richiamare il seguente metodo: $DB->qstr("l'anno scorso sono andato all'ospedale");
 * 
 * Un'utile funzione per mostrare il recordset di un SELECT in una tabella HTML è:  rs2html($recordset);
 * 
 * I messaggi di errore possono essere visualizzati richiamando il seguente metodo: $DB->ErrorMsg();
 * 
 * Per chiudere la connessione al database richiamare il seguente metodo: $DB->Close(); 
 * 
 */
 
 
//Dati per la connessione al database
$server="localhost";
$user="username";
$pwd="password";
$DB="db"; 
//Inclusione delle classi di adodb per il db management 
include('../classes/adodb5/adodb.inc.php');
$DB = NewADOConnection('mysql');
$DB->Connect($server, $user, $pwd, $db);
 
?>
