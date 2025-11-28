<?php


declare( strict_types = 1 );


require_once __DIR__ . '/../vendor/autoload.php';


use JDWX\Web\Pages\SimpleHtmlPage;


/** @suppress PhanTypeSuspiciousEcho */
( static function () : void {

    $page = new SimpleHtmlPage();
    $page->setTitle( 'Example Page' );
    $page->addContent( '<p>This is an example page.</p>' );
    echo $page;

} )();