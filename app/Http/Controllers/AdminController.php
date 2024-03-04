<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Property_table;
use App\Models\Tenants_table;
use App\Models\Admins;
use App\Models\Contact_table;
use App\Models\Subscribers;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{

    //Displaying 

    public function NewPropertyshowRegistrationForm()
    {
        return view('admin.NewProperty');
    }

    public function NewContactshowRegistrationForm()
    {
        return view('admin.NewContact');
    }
  
    public function NewAdminshowRegistrationForm()
    {
        return view('admin.NewAdmin');
    }

    public function registerProperty(Request $request)
    {
        $request->validate([
            'property_type' => ['required', 'array', 'min:1'],
            'price' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'property_image' => ['required', 'image'], // Changed from property_image to property_image
        ]);
    
        // Handle property type array
        $propertyType = implode(',', $request->property_type);
    
        $user = new Property_table(); 
        $user->property_type = $propertyType;
        $user->price = $request->price;
        $user->location = $request->location;
    
        if ($request->hasFile('property_image')) {
            $file = $request->file('property_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = public_path('property_images');
    
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }
            $file->move($path, $filename);
            $user->image = $filename;
        }
    
        $user->save();
        
        return redirect()->back()->with('message', 'Property registered successfully.');
    }

    public function registerAdmin(Request $request)                                   
    {
        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:Admins'],
            'password' => ['required', 'string', 'min:8'], 
            'confirm' => ['required', 'string', 'min:8', 'same:password'],
            'telephone' => ['required', 'string', 'max:255'],
            'image' => ['required', 'image'], 
             
        ],
         [
            'confirm.same' => 'The password confirmation does not match.',
        ]);
        // Store the uploaded image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = public_path('admins_images');

            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            $file->move($path, $filename);
        }

        // Create the admin instance
        $admin = new Admins();
        $admin->firstname = $request->firstname;
        $admin->lastname = $request->lastname;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password); 
        $admin->telephone = $request->telephone;
        $admin->image = $filename ?? null; 

        // Save the admin
        $admin->save();
        
        return redirect()->back()->with('message', 'Admin registered successfully.');
    }    
    
    public function UpdateAdmin(Request $request, $adminId)                                   
    {
        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('Admins')->ignore($adminId)],
            'telephone' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'image'], // Make the image field nullable if it's optional
        ]);
    
        $admin = Admins::findOrFail($adminId);
    
        // Update the admin's data
        $admin->firstname = $request->input('firstname');
        $admin->lastname = $request->input('lastname');
        $admin->email = $request->input('email');
        $admin->telephone = $request->input('telephone');
    
        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = public_path('admins_images');

            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            $file->move($path, $filename);
        }

        $admin->image = $filename ?? null;
        
        $admin->save();
    
        // Redirect back or to any desired route
        return redirect()->back()->with('success', 'Admin updated successfully');
    }
    


    public function AllContacts()
    {
        try {
            $admin= Contact_table::all();
    
            // Pass Contact_table data to the view
            return view('admin.VBcontacts', ['admin' => $admin]);
        } catch (\Exception $e) {
            // Handle any exceptions
            return redirect()->back()->with('error', 'Failed to fetch contacts: '.$e->getMessage());
        }
    }
    
    public function AllAdmin()
    {
        try {
            $select= Admins::all();
    
            // Pass Contact_table data to the view
            return view('admin.Admins', ['select' => $select]);
        } catch (\Exception $e) {
            // Handle any exceptions
            return redirect()->back()->with('error', 'Failed to fetch admins data: '.$e->getMessage());
        }
    }
    public function RegisterContact(Request $request)
    {
        $request->validate([
            'email_1' => ['required', 'String', 'max:255'],
            'email_2' => ['nullable', 'String', 'max:255'],
            'phone_number1' => ['required', 'string', 'max:255'],
            'phone_number2' => ['required', 'string', 'max:255'],
            'phone_number3' => ['nullable', 'string', 'max:255'],
            'copyright_year' => ['nullable', 'string', 'max:255'],
        ]);
        
        $contact  = new Contact_table(); 
        $contact ->email_1 = $request->email_1;
        $contact ->email_2 = $request->email_2;
        $contact ->phone_number1 = $request->phone_number1;
        $contact ->phone_number2 = $request->phone_number2;
        $contact ->phone_number3 = $request->phone_number3;
        $contact ->copyright_year = $request->copyright_year;
        $contact ->save();
        
        return redirect()->back()->with('message', 'New contact registered successfully.');
    }
    
    public function updateContact(Request $request, $contactId)
{
    // Find the contact by ID
    $contact = Contact_table::findOrFail($contactId);

    // Validate form data
    $request->validate([
        'email_1' => ['required', 'email'],
        'email_2' => ['nullable', 'email'],
        'phone_number1' => ['required', 'string', 'max:255'],
        'phone_number2' => ['nullable', 'string', 'max:255'],
        'phone_number3' => ['nullable', 'string', 'max:255'],
        'copyright_year' => ['nullable', 'string', 'max:255'],
    ]);

    // Update contact data
    $contact->email_1 = $request->email_1;
    $contact->email_2 = $request->email_2;
    $contact->phone_number1 = $request->phone_number1;
    $contact->phone_number2 = $request->phone_number2;
    $contact->phone_number3 = $request->phone_number3;
    $contact ->copyright_year = $request->copyright_year;

    $contact->save();

    return redirect()->back()->with('message', 'Contact updated successfully.');
}
    public function DeleteContact(Request $request, $Id)
    {
        try {
            // Fetch the contact by ID
            $contact = Contact_table::findOrFail($Id);
    
            // Proceed with deletion
            $contact->delete();
    
            // Return success response
            return redirect()->back()->with('message', 'Contact deleted successfully.');
        } catch (ModelNotFoundException $e) {
            // Handle the case when the contact is not found
            return redirect()->route('users')->with('error', 'Contact not found.');
        } catch (\Exception $e) {
            // Handle other exceptions
            return redirect()->route('users')->with('error', 'Failed to delete contact: '.$e->getMessage());
        }
    }

    public function deleteProperty(Request $request, $propertyId) {
        try {
            // Fetch the property by ID
            $property = Property_table::findOrFail($propertyId);
    
            // Proceed with deletion
            $property->delete();
    
            // Return success response
            return redirect()->back()->with('message', 'Property deleted successfully.');
        } catch (ModelNotFoundException $e) {
            // Handle the case when the property is not found
            return redirect()->route('users')->with('error', 'Property not found.');
        } catch (\Exception $e) {
            // Handle other exceptions
            return redirect()->route('users')->with('error', 'Failed to delete property: '.$e->getMessage());
        }
    }

    public function updateProperty(Request $request, $propertyId)
{
    // Find the property by ID
    $property = Property_table::findOrFail($propertyId);

    // Validate form data
    $request->validate([
        'property_type' => ['required', 'string', 'max:255'],
        'price' => ['required', 'string', 'max:255'],
        'status' => ['required', 'string', 'in:available,Already taken'], // Updated validation rule
        'location' => ['required', 'string', 'max:255'],
        'property_image' => ['nullable', 'image'], // Corrected validation rule
    ]);

    // Update property data
    $property->property_type = $request->property_type;
    $property->price = $request->price;
    $property->status = $request->status; 
    $property->location = $request->location;

    // Handle image update if provided

    $property->save();

    return redirect()->back()->with('message', 'Property updated successfully.');
}

    public function index(){
          $select = Property_table::all();
        
        // Pass Property_properties data to the view
        return view('admin.properties', ['select' => $select]);
    }

    public function All_properties()
    {
        $ALL = Property_table::all();
        
        // Pass Property_properties data to the view
        return view('users.home', ['ALL' => $ALL]);
       
    }
    
    public function All_Category_menu()
    {
        $ALL = Property_table::all();
        
        // Pass Property_properties data to the view
        return view('users.all_category_menu', ['ALL' => $ALL]);
       
    }
    
    
    public function Tenants()
    {
        $tenant = Tenants_table::all(); 
        return view('admin.Tenants', compact('tenant'));
       
    }

    public function showSubscribers()
    {
        $subscribers = Subscribers::all();
        return view('admin.subscribers', ['subscribers' => $subscribers]);
    }

    public function subscribers(Request $request)
    {
          // Validate the request
    $validatedData = $request->validate([
        'email' => 'required|email|unique:subscribers,email',
    ]);

    // Create a new subscriber
    Subscribers::create([
        'emailS' => $validatedData['email'],
    ]);

    // Return a success response
    return response()->json(['message' => 'Subscription successful'], 200);
    }


    public function save_order(Request $request)
    {
        try {
            // Validate and store the order details in the database
            Orders::create([
                'Property_table_id' => $request->input('Property_table_id'),
                'Property_table_name' => $request->input('Property_table_name'),
                'quantity' => $request->input('quantity'),
                'customer_name' => $request->input('customer_name'),
                'customer_email' => $request->input('customer_email'),
                'transaction_status' => 'pending', // Assuming this is the default status
            ]);

            return redirect()->route('orders_user');
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Failed to save order',
                'message' => $e->getMessage()
            ], 500); 
        }
    }

   
    public function bookProperty(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'property_id' => 'required|exists:Property_table,id',
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
        ]);

        try {

            $property = Property_table::findOrFail($validatedData['property_id']);
            $tenant = new Tenants_table();
            $tenant->property_type = $property->property_type;
            $tenant->image = $property->image;
            $tenant->location = $property->location;
            $tenant->price = $property->price;
            $tenant->tenant_name = $validatedData['name'];
            $tenant->tenant_email = $validatedData['email'];
            $tenant->phone_number = $validatedData['phone'];
            $tenant->status = 'pending'; 
            $tenant->save();

            return back()->with('success', 'Booking successful');

            } catch (\Exception $e) {
                
                return back()->with('error', 'Failed to book property');
            }
    }

    public function updateStatusTenants($orderId, $status)
    {
        try {
            // Retrieve the order by ID
            $order = Tenants_table::findOrFail($orderId);
    
            $order->status = $status; 
            $order->save();
    
            return response()->json([
                'status' => 'success',
                'message' => 'Status updated successfully.', // Provide a success message
                'color' => $status === 'accepted' ? 'green' : ($status === 'rejected' ? 'red' : 'black')
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json(['status' => 'error', 'message' => 'No booking found'], 404);
        }
    }
    

    public function FilterVilla()
    {
        $filteredVilla = Property_table::where('property_type', 'Villa')
                                        ->where(function ($query) {
                                            $query->where('status', 'available')
                                                  ->orWhere('status', 'Already taken');
                                                
                                        })
                                        ->get();
        
        if ($filteredVilla->isEmpty()) {
            return null;
        } else {
            return $filteredVilla;
        }
    }
    
    public function FilterHouse()
    {
        $filteredHouse = Property_table::where('property_type', 'House')
                                        ->where(function ($query) {
                                            $query->where('status', 'available')
                                                  ->orWhere('status', 'Already taken');                              
                                        })
                                        ->get();
        
        if ($filteredHouse->isEmpty()) {
            return null;
        } else {
            return $filteredHouse;
        }
    }
    
    public function FilterTouringVehicles()
    {
        $filteredTouringVehicle = Property_table::where('property_type', 'touring-vehicle')
                                                ->where(function ($query) {
                                                    $query->where('status', 'available')
                                                        ->orWhere('status', 'Already taken');
                                                })
                                                ->get();
        
        if ($filteredTouringVehicle->isEmpty()) {
            return null;
        } else {
            return $filteredTouringVehicle;
        }
    }
    
    public function FilterOtherVehicles()
    {
        $filteredOtherVehicle = Property_table::where('property_type', 'other-vehicle')
                                                ->where(function ($query) {
                                                    $query->where('status', 'available')
                                                          ->orWhere('status', 'Already taken');
                                                        
                                                })
                                                ->get();
        
        // Check if any other vehicles are available
        if ($filteredOtherVehicle->isEmpty()) {
            return null;
        } else {
            return $filteredOtherVehicle;
        }
    }
    
    
    public function showVillas()
    {
        $filteredVilla = $this->FilterVilla();

        if ($filteredVilla === null) {
            // If no villas available, display the error message
            $errorMessage = "Sorry, all properties in this category are taken.";
            return view('users.Villas', ['errorMessage' => $errorMessage]);
        } else {
            // If villas are available, pass them to the view
            return view('users.Villas', ['filteredVilla' => $filteredVilla]);
        }
    }

    // Show Houses
    public function showHouses()
    {
        $filteredHouse = $this->FilterHouse();

        if ($filteredHouse === null) {
            // If no houses available, display the error message
            $errorMessage = "Sorry, all properties in this category are taken.";
            return view('users.Houses', ['errorMessage' => $errorMessage]);
        } else {
            return view('users.Houses', ['filteredHouse' => $filteredHouse]);
        }
    }
    
    // Show Touring Vehicles
    public function showTouringVehicles()
    {
        $filteredTouringVehicle = $this->FilterTouringVehicles();
        if ($filteredTouringVehicle === null) {
            $errorMessage = "Sorry, all properties in this category are taken.";
            return view('users.Touring_vehicles', ['errorMessage' => $errorMessage]);
        } else {
            // If touring vehicles are available, pass them to the view
            return view('users.Touring_vehicles', ['filteredTouringVehicle' => $filteredTouringVehicle]);
        }
    }
    
    // Show Other Vehicles
    public function showOtherVehicles()
    {
        $filteredOtherVehicle = $this->FilterOtherVehicles();
        if ($filteredOtherVehicle === null) {     
            $errorMessage = "Sorry, all properties in this category are taken.";
            return view('users.Other_vehicles', ['errorMessage' => $errorMessage]);
        } else {
            // If other vehicles are available, pass them to the view
            return view('users.Other_vehicles', ['filteredOtherVehicle' => $filteredOtherVehicle]);
        }
    }
    
    
}
