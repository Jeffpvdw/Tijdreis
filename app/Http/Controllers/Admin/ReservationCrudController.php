<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ReservationRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ReservationCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ReservationCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Reservation::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/reservation');
        CRUD::setEntityNameStrings('Reservering', 'Reserveringen');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('tour_id')->label('Tour')->type('select')->name('tour_id')->entity('tours')->attribute('dateTime')->model('App\Models\Reservation');
        // CRUD::column('tour_id')->label('Tour');
        CRUD::column('email')->label('E-mail');
        CRUD::column('phone')->label('Telefoonnummer');
        CRUD::column('comment')->label('Commentaar');
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
        CRUD::setValidation(ReservationRequest::class);

        // $this->crud->addField([
        //     'label' => "Tour",
        //     'type' => 'select',
        //     'name' => 'tour_id', // the db column for the foreign key
        //     'entity' => 'tours', // the method that defines the relationship in your Model
        //     'attribute' => 'tour_id', // foreign key attribute that is shown to user
        //     'model' => "App\Models\Reservation" // foreign key model
        // ]);
        CRUD::field('tour_id')->label('Tour')->type('select')->name('tour_id')->entity('tours')->attribute('dateTime')->model('App\Models\Reservation');
        // CRUD::field('tour_id')->label('Tour');
        CRUD::field('email')->label('E-mail');
        CRUD::field('phone')->label('Telefoonnummer');
        CRUD::field('comment')->label('Commentaar');

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
