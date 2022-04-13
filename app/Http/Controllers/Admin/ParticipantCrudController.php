<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ParticipantRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ParticipantCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ParticipantCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Participant::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/participant');
        CRUD::setEntityNameStrings('Deelnemer', 'Deelnemers');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('reservation_id')->label('Reserverings Houder')->type('select')->name('reservation_id')->entity('participants')->attribute('email')->model('App\Models\Participant');
        // CRUD::column('reservation_id')->label('Reserverings Houder');
        CRUD::column('firstname')->label('Voornaam');
        CRUD::column('preposition')->label('Tussenvoegsel');
        CRUD::column('lastname')->label('Achternaam');
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
        CRUD::setValidation(ParticipantRequest::class);

        $this->crud->addField([
            'label' => "Reserverings Houders",
            'type' => 'select',
            'name' => 'reservation_id', // the db column for the foreign key
            'entity' => 'participants', // the method that defines the relationship in your Model
            'attribute' => 'email', // foreign key attribute that is shown to user
            'model' => "App\Models\Reservation" // foreign key model
        ]);
        // CRUD::field('reservation_id')->label('Reserverings Houder')->type('select')->name('reservation_id')->entity('participants')->attribute('email')->model('App\Models\Reservation');
        CRUD::field('firstname')->label('Voornaam');
        CRUD::field('preposition')->label('Tussenvoegsel');
        CRUD::field('lastname')->label('Achternaam');

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
}
