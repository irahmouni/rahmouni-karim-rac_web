<?php
/**
 * File:  index.php
 * Creation Date: 06/03/2020
 * description: WISH LIST
 *
 * @author: karim
 */

require_once  'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as BD;

use mywishlist\modele\Client;
use mywishlist\modele\Facture;

$db = new BD();
$db->addConnection(parse_ini_file('src/conf/conf.ini'));

$db->setAsGlobal();
$db->bootEloquent();


 $q1 = Client::select( 'id', 'nomcli', 'adrcli', 'villecli')->get();

foreach ($q1 as $row) {
        print_r("$row->id : $row->nomcli : $row->adrcli : $row->villecli"); 
        echo ('<br>');
        }

$q1 = Facture::select( 'id', 'datefact', 'montant', 'client_id')->get();

foreach ($q1 as $row) {
        print_r("$row->id : $row->datefact : $row->montant : $row->client_id"); 
        echo ('<br>');
        }

?>
