<?php

namespace Opifer\CrudBundle\Datagrid;

use Doctrine\Common\Collections\ArrayCollection;

use Opifer\CrudBundle\Datagrid\Column\Column;
use Opifer\CrudBundle\Datagrid\Row\Row;
use Opifer\CrudBundle\Entity\ListView;
use Opifer\CrudBundle\Pagination\Paginator;

use Symfony\Component\Form\FormView;

/**
 * Datagrid
 *
 * Converts all data to be used in the datagrid
 */
class Datagrid
{
    /** @var Paginator */
    protected $paginator;

    /** @var ArrayCollection */
    protected $rows;

    /** @var ArrayCollection */
    protected $columns;

    /** @var array */
    protected $options = [];

    /** @var array */
    protected $views;

    /** @var ListView */
    protected $view;

    /** @var FormView */
    protected $viewForm;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->columns = new ArrayCollection();
        $this->rows = new ArrayCollection();
        $this->options = [
            'actions' => [
                'edit' => [],
                'delete' => []
            ]
        ];
    }

    /**
     * Set the main source for the datagrid
     *
     * @param object $source
     *
     * @return Datagrid
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get the source
     *
     * @return object
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Add a column
     *
     * @param Column $column
     */
    public function addColumn(Column $column)
    {
        $this->columns->add($column);

        return $this;
    }

    /**
     * Set all columns at once
     *
     * @param ArrayCollection $columns
     */
    public function setColumns(ArrayCollection $columns)
    {
        $this->columns = $columns;

        return $this;
    }

    /**
     * Get all columns
     *
     * @return ArrayCollection
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * Add a row
     *
     * @param Row $row
     */
    public function addRow(Row $row)
    {
        $this->rows->add($row);

        return $this;
    }

    public function setRows(ArrayCollection $rows)
    {
        $this->rows = $rows;

        return $this;
    }

    /**
     * Get all rows
     *
     * @return ArrayCollection
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * Set available views
     *
     * @param array $views
     */
    public function setViews(array $views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get all available views
     *
     * @return ArrayCollection
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set view form
     *
     * @param FormView $viewForm
     */
    public function setViewForm(FormView $viewForm)
    {
        $this->viewForm = $viewForm;

        return $this;
    }

    /**
     * Get the view form
     *
     * @return FormView
     */
    public function getViewForm()
    {
        return $this->viewForm;
    }

    /**
     * Set the pagination
     *
     * @param Paginator $paginator
     */
    public function setPaginator($paginator)
    {
        $this->paginator = $paginator;

        return $this;
    }

    /**
     * Get pagination
     *
     * @return Paginator
     */
    public function getPaginator()
    {
        return $this->paginator;
    }

    /**
     * Set list view
     *
     * @param ListView $view
     */
    public function setView(ListView $view)
    {
        $this->view = $view;

        return $this;
    }

    /**
     * Get selected list view
     *
     * @return ListView
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Set options
     *
     * @param array $options
     */
    public function setOptions(array $options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Get all datagrid-global options
     *
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }
}
