<?php

namespace App\Http\Controllers\Dashboard\Product;

use App\Helpers\Components;
use App\Helpers\General;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Dashboard\Product\Utils\Variables;

class ProductController extends Controller
{
    // service to be validated
    protected string $class;

    // permission to be validated
    protected string $method;

    /**
     * Sets class and method for every method in this class for checking permissions.
     */
    public function __construct()
    {
        $this->class = General::getClass();
        $this->method = General::getMethod();
    }
    /**
     * Displays all products using DataTables.
     *
     * @return View|Factory|Application|RedirectResponse
     */
    public function index(): View|Factory|Application|RedirectResponse
    {

        if(User::thisUserHasPermission($this->method, $this->class))
        {
            $vars = new Variables();
            $data = [
                'sidebar' => Components::SideBar('dashboard/products', 'admin'),
                'navbar' => Components::Navbar(),
                'datatable' => Components::createDatatable( $this->class. "s", $vars->Columns()),
                'options' => $vars->Options()
            ];
            return view('dashboard.products.index', $data);
        }
        else
        {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }

    /**
     * Displays form to create new product.
     *
     * @return View|Factory|RedirectResponse|Application
     */
    public function create(): View|Factory|RedirectResponse|Application
    {
        if(User::thisUserHasPermission($this->method, $this->class))
        {
            $data = [
                'sidebar' => Components::SideBar('dashboard', 'admin'),
                'navbar' => Components::Navbar(),
            ];
            return view('dashboard.products.create', $data);
        }
        else
        {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }

    /**
     * Stores new product in database.
     *
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        if(User::thisUserHasPermission($this->method, $this->class))
        {
            $this->validate($request, [
                'name' => 'required|string|max:255',
                'price' => 'required',
                'brand' => 'required',
                'tax' => 'required',
            ]);
            $image = '[
                "https://images.unsplash.com/photo-1657299143322-934f44698807?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2574&q=80",
                "https://images.unsplash.com/photo-1657214059233-5626b35eb349?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2536&q=80",
                "https://images.unsplash.com/photo-1652210998083-428eaf01f6bc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2564&q=80",
                "https://images.unsplash.com/photo-1661630803143-de2704595708?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2565&q=80"
            ]';
            $product = new Product();
            $product->code = $request->code;
            $product->name = $request->name;
            $product->price = $request->price;
            $product->brand = $request->brand;
            $product->tax = $request->tax;
            $product->status = 1;
            $product->images = $image;
            $product->save();
            notify()->success('Ürün başarıyla eklendi.', 'Başarılı');
            return redirect()->route('dashboard.products.index');
        }
        else
        {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }

    /**
     * Displays form to edit product.
     *
     * @param Product $product
     * @return View|Factory|Application|RedirectResponse
     */
    public function edit(Product $product): View|Factory|RedirectResponse|Application
    {
        if(User::thisUserHasPermission($this->method, $this->class))
        {
            $data = [
                'sidebar' => Components::SideBar('dashboard', 'admin'),
                'navbar' => Components::Navbar(),
                'product' => $product
            ];
            return view('dashboard.products.edit', $data);
        }
        else
        {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }

    /**
     * Updates product in database.
     *
     * @param Request $request
     * @return View|Factory|Application|RedirectResponse
     */
    public function update(Request $request): Factory|View|RedirectResponse|Application
    {
        if(User::thisUserHasPermission($this->method, $this->class))
        {
            $this->validate($request, [
                'name' => 'required|string|max:255',
                'price' => 'required',
                'brand' => 'required',
                'tax' => 'required',
                'status' => 'required',
            ]);
            $product = Product::find($request->id);
            $product->code = $request->code;
            $product->name = $request->name;
            $product->price = $request->price;
            $product->brand = $request->brand;
            $product->tax = $request->tax;
            $product->status = $request->status;
            $product->save();
            notify()->success('Ürün başarıyla güncellendi.', 'Başarılı');
            return redirect()->route('dashboard.products.index');
        }
        else
        {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }

    /**
     * Deletes product from database.
     *
     * @param Product $product
     * @return View|Factory|Application|RedirectResponse
     */
    public function destroy(Product $product): Factory|View|RedirectResponse|Application
    {
        if(User::thisUserHasPermission($this->method, $this->class))
        {
            $product->delete();
            notify()->success('Ürün başarıyla silindi.', 'Başarılı');
            return redirect()->route('dashboard.products.index');
        }
        else
        {
            notify()->warning('Bu işlemi yapmaya yetkiniz bulunmamaktadır.', 'Yetki Hatası');
            return redirect()->back();
        }
    }

    public $options = [
        [
            "value" => "0",
            "name" => "Tümü"
        ],
        [
            "value" => "1",
            "name" => "Stoklular"
        ],
        [
            "value" => "2",
            "name" => "Azalan Stoklar"
        ],
        [
            "value" => "3",
            "name" => "Biten Stoklar"
        ],
        [
            "value" => "4",
            "name" => "Fiyatı 0 TL"
        ],
        [
            "value" => "5",
            "name" => "Kategorisiz"
        ],
        [
            "value" => "6",
            "name" => "Markasız"
        ],
        [
            "value" => "7",
            "name" => "Varyantsız"
        ],
        [
            "value" => "8",
            "name" => "Son 24 Saatte Harekete Giren Ürünler"
        ],
        [
            "value" => "9",
            "name" => "Son 24 Saatte Tükenenler"
        ],
        [
            "value" => "10",
            "name" => "Pasif Ürünler"
        ]
    ];

    public $cols = [
        'product_id' => 'ID',
        'code' => 'Kod',
        'name' => 'Ad',
        'brand' => 'Marka',
        'tax' => 'Vergi',
        'price' => 'Fiyat',
        'created_at' => 'Oluşturma Tarihi',
        'updated_at' => 'Güncelleme Tarihi',
    ];
}
