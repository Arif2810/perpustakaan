<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';
class Pdf_report extends TCPDF
{
    function __construct(){
        parent::__construct();
    }
}