<?php

include('const.inc.php');

/**
 * Fitxer de funcions
 *
 * @category Function
 * @package  Test
 * @author   Jordi <jcortes@lasalle.cat>
 * @license  www.Test.com test
 * @link     (asdfadfs)
 */

/**
 * Recuperar chars
 *
 * @return array
 */
function getChars()
{
    $dom = new DOMDocument();
    $dom->load(DATA);
    $xpath = new DOMXPath($dom);
    $queryNom = "//nombre";
    $queryId = "//@id";

    $arr = [];
    $noms = $xpath->query($queryNom);
    $ids = $xpath->query($queryId);
    foreach ($noms as $node) {
        $arrNom[] = $node->nodeValue;
    }
    foreach ($ids as $node) {
        $arrId[] = $node->nodeValue;
    }
    $arr['nom'] = $arrNom;
    $arr['id'] = $arrId;
    return $arr;
}

/**
 * Recuperar info
 *
 * @id     identificador
 * @return null
 */
function getInfo($id)
{
    //    session_start();
    $dom = new DOMDocument();
    $dom->load(DATA);
    $xpath = new DOMXPath($dom);
    $query = "pj[@id='$id']";
    
    $arr = [];
    $arr += array('id'  => $id);
    foreach (COLUMNS as $col) {
        $result = $xpath->query("//pj[@id='$id']/$col");

        foreach ($result as $node) {
            $arr += array($col => $node->nodeValue);
        }
    }
    
    $_SESSION['fitxa'] = $arr;
}

function xmlToArray(SimpleXMLElement $xml): array
{
    $parser = function (SimpleXMLElement $xml, array $collection = []) use (&$parser) {
        $nodes = $xml->children();
        $attributes = $xml->attributes();

        if (0 !== count($attributes)) {
            foreach ($attributes as $attrName => $attrValue) {
                $collection['attributes'][$attrName] = strval($attrValue);
            }
        }

        if (0 === $nodes->count()) {
            $collection['value'] = strval($xml);
            return $collection;
        }

        foreach ($nodes as $nodeName => $nodeValue) {
            if (count($nodeValue->xpath('../' . $nodeName)) < 2) {
                $collection[$nodeName] = $parser($nodeValue);
                continue;
            }

            $collection[$nodeName][] = $parser($nodeValue);
        }

        return $collection;
    };

    return [
        $xml->getName() => $parser($xml)
    ];
}
