<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TourRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class TourCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TourCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Tour::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/tour');
        CRUD::setEntityNameStrings('tour', 'tours');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {

        // CRUD::column('theme_id')->label('Thema');
        // $this->crud->addColumn([
        //     'label' => "Thema",
        //     // 'type' => 'select',
        //     'name' => 'theme_id', // the db column for the foreign key
        //     'entity' => 'themes', // the method that defines the relationship in your Model
        //     'attribute' => 'name', // foreign key attribute that is shown to user
        //     'model' => "App\Models\Theme" // foreign key model
        // ]);
        CRUD::column('theme_id')->label('Thema')->type('select')->name('theme_id')->entity('themes')->attribute('name')->model('App\Models\Theme');
        CRUD::column('dateTime')->label('Datum');
        CRUD::column('capacity')->label('Max. Deelnemers');
        CRUD::column('start_location')->label('Start locatie');
        CRUD::column('price_adult')->label('Prijs Volwassenen');
        CRUD::column('price_child')->label('Prijs Kinderen');
        CRUD::column('created_at')->label('Gemaakt op');
        CRUD::column('updated_at')->label('Veranderd op');


        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(TourRequest::class);

        $this->crud->addField([
            'label' => "Thema",
            'type' => 'select',
            'name' => 'theme_id', // the db column for the foreign key
            'entity' => 'themes', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "App\Models\Theme" // foreign key model
        ]);
        // CRUD::field('theme_id')->label('Thema')->type('select')->name('theme_id')->entity('themes')->attribute('name')->model('App\Models\Theme');
        CRUD::field('dateTime')->label('Datum en Tijd');
        CRUD::field('capacity')->label('Max. Deelnemers');
        CRUD::field('start_location')->label('Start locatie');
        CRUD::field('price_adult')->label('Prijs Volwassenen');
        CRUD::field('price_child')->label('Prijs Kind');


        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
    protected function setupShowOperation()
    {
        CRUD::column('theme_id')->label('Thema')->type('select')->name('theme_id')->entity('themes')->attribute('name')->model('App\Models\Theme');
        CRUD::column('dateTime')->label('Datum');
        CRUD::column('capacity')->label('Max. Deelnemers');
        CRUD::column('start_location')->label('Start locatie');
        CRUD::column('price_adult')->label('Prijs Volwassenen');
        CRUD::column('price_child')->label('Prijs Kinderen');
        CRUD::column('created_at')->label('Gemaakt op');
        CRUD::column('updated_at')->label('Veranderd op');
    }
}
