<?php

namespace App\Http\Controllers;

use App\Repositories\StoreRepositoryInterface; // Use the interface, not the concrete class
use Illuminate\Http\Request;

class StoreController extends Controller
{
    protected $storeRepository;

    // Inject StoreRepositoryInterface instead of StoreRepository
    public function __construct(StoreRepositoryInterface $storeRepository)
    {
        $this->storeRepository = $storeRepository;
        $this->middleware('auth');
    }

    public function index()
    {
        $stores = $this->storeRepository->all();
        return view('stores.index', compact('stores'));
    }

    public function show($id)
    {
        $store = $this->storeRepository->find($id);
        $this->authorize('view', $store);
        return view('stores.show', compact('store'));
    }

    public function create()
    {
        return view('stores.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'store_name' => 'required|string|max:255',
            'email' => 'required|email|unique:stores,email',
            'phone_number' => 'nullable|string|max:15',
            'description' => 'nullable|string',
            'user_id' => 'required|exists:users,id',
        ]);

        // Create a new store record
        $this->storeRepository->create($request->all());

        // Redirect to the stores index with a success message
        return redirect()->route('stores.index')->with('success', 'Store created successfully.');
    }
}
