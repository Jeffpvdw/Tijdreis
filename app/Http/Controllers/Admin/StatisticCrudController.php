<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StatisticRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class StatisticCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class StatisticCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Statistic::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/statistic');
        CRUD::setEntityNameStrings('Statistiek', 'Statistieken');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('participant_id')->label('Voornaam Deelnemer')->type('select')->name('participant_id')->entity('statisticsName')->attribute('firstname')->model('App\Models\Participant');
        CRUD::column('tour_id')->label('Tour')->type('select')->name('tour_id')->entity('tourDate')->attribute('dateTime')->model('App\Models\Tour');
        CRUD::column('zipcode')->label('Postcode');
        CRUD::column('birthdate')->label('Geboortedatum');
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
        CRUD::setValidation(StatisticRequest::class);

        // CRUD::field('participant_id');
        // $this->crud->addField([
        //     'label' => "Voornaam Deelnemer",
        //     'type' => 'select',
        //     'name' => 'participant_id', // the db column for the foreign key
        //     'entity' => 'statisticsName', // the method that defines the relationship in your Model
        //     'attribute' => 'firstname', // foreign key attribute that is shown to user
        //     'model' => "App\Models\Participant" // foreign key model
        // ]);
        $this->crud->addField([
            'label' => "Persoon",
            'type' => 'hidden',
            'name' => 'id', // the db column for the foreign key
        ]);
        $this->crud->addField([
            'label' => "Tour",
            'type' => 'select',
            'name' => 'tour_id', // the db column for the foreign key
            'entity' => 'tourDate', // the method that defines the relationship in your Model
            'attribute' => 'dateTime', // foreign key attribute that is shown to user
            'model' => "App\Models\Tour" // foreign key model
        ]);
        CRUD::field('zipcode')->label('Postcode');
        CRUD::field('birthdate')->label('Geboortedatum');

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
        CRUD::column('zipcode')->label('Postcode');
        CRUD::column('birthdate')->label('Geboortedatum');
        CRUD::column('created_at')->label('Gemaakt op');
        CRUD::column('updated_at')->label('Veranderd op');
    }
}
