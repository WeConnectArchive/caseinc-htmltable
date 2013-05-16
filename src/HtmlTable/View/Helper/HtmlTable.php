<?php
namespace HtmlTable\View\Helper;

use Zend\View\Helper\AbstractHtmlElement;
use HtmlTable\Model\Table;
/**
 * @author diego
 *
 */
class HtmlTable extends AbstractHtmlElement
{
    public function __invoke($data = array())
    {
        if(is_array($data)){
            $HtmlTable = new Table($data);
        }
        $attributes = $HtmlTable->getAttributes();
        $html = '';
        $html = '<table id="'.$attributes['id'].'">';
        $html .= '<thead><tr>';
        $headRows = $HtmlTable->getHeaderRow();
        if(count($headRows)>0){
            foreach($headRows as $title){
                $html .='<th>'.$title.'</th>';
            }
        }
        $html .= '</tr></thead>';
        $html .= '<tbody>';
        if(!empty($data['body'])){
            
            foreach($data['body'] as $row){
                $html .= '<tr>';
                foreach($row as $column){
                    $html .= '<td>'.$column.'</td>';
                }
                $html .= '</tr>';
            }
            
        }
        $html .= '</tbody></table>';
        return $html;
    }
}
