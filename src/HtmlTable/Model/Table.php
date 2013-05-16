<?php
namespace HtmlTable\Model;

/**
 * @author diego
 *
 */
class Table {
    /**
     * Header of the table
     * @var array
     */
    protected  $_headerRows;
    /**
     * Rows of the table
     * @var array
     */
    protected $_bodyRows;
    /**
     * Attributes of the table
     * @var array
     */
    protected $_tableAttributes;
    
    /**
     * 
     * @param array $rows
     */
    public function __construct(array $rows = array())
    {
        if(isset($rows['body'])){
            $this->setBodyRows($rows['body']);
            if(isset($rows['head'])){
                $this->setHeaderRow($rows['head']);
            }
            if(isset($rows['id'])){
                $this->setAttributes(array('id' => $rows['id']));
            }
        } else {
            $this->setBodyRows($rows);
        }
        
    }
    
    /**
     * Sets the attributes of the table
     * @param array $attributes
     * @return \HtmlTable\Model\Table
     */
    public function setAttributes(array $attributes)
    {
        $this->_tableAttributes = $attributes;
        return $this;
    }
    
    /**
     * Returns the attribute of the table
     * @return multitype:
     */
    public function getAttributes()
    {
        return $this->_tableAttributes;
    }
    
    /**
     * Set table body rows
     * @param array $rows
     */
    public function setBodyRows(array $rows)
    {
        $this->_bodyRows = $rows;
    }
    
    /**
     * Adds 1 row to the body of the table
     * @param array $row
     * @return \HtmlTable\Model\Table
     */
    public function addBodyRow(array $row)
    {
        $this->_bodyRows[] = $row;
        return $this;
    }
    
    /**
     * Returns the rows of the table
     * @param array $rows
     */
    public function getBodyRows(array $rows)
    {
        $this->_bodyRows = $rows;        
    }
    
    /**
     * Sets the header of the table
     * @param array $headerRow
     * @return \HtmlTable\Model\Table
     */
    public function setHeaderRow(array $headerRow)
    {
        $this->_headerRows = $headerRow;
        return $this;
    }
    
    /**
     * Returns the header of the table
     * @return multitype:
     */
    public function getHeaderRow()
    {
        return $this->_headerRows;
    }
}
