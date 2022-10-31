<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Service;
use App\Models\User;
use App\Models\UserType;
use DB;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DatatableController extends Controller
{

    /**
     * @param Request $request
     * @return JsonResponse|RedirectResponse
     * @throws Exception
     */
    public function usersTable(Request $request): JsonResponse|RedirectResponse
    {
        if ($request->ajax()) {
            $data = DB::table('users')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    return $row->status == 1 ? 'Aktif' : 'Pasif';
                })
                ->addColumn('actions', function ($row) {
                    $btn = "
                    <div class=\"dropdown\">
                        <button
                         class=\"btn btn-primary dropdown-toggle\"
                         type=\"button\"
                         id=\"optionsDropdown\"
                         data-bs-toggle=\"dropdown\"
                         aria-expanded=\"false\"
                        >
                        Seçenekler
                        </button>
                        <ul
                         class=\"dropdown-menu\"
                         aria-labelledby=\"optionsDropdown\"
                        >
                        <li>
                            <div class='dropdown-item'>
                                <a href='/dashboard/users/types/" . $row->user_id . "/edit' class='edit btn btn-primary btn-sm'>
                                    Düzenle
                                </a>
                            </div>
                        </li>
                        <li>
                            <form
                             action='/dashboard/users/types/" . $row->user_id . "/delete'
                             method='POST'
                             class='dropdown-item'
                            >
                                <input type='hidden' name='_method' value='delete'>
                                <input type='hidden' name='_token' value='" . csrf_field() . "'>
                                <button type='submit' class='btn btn-danger btn-sm'>Sil</button>
                            </form>
                        </li>
                        </ul>
                    </div>
                    ";
                    return $btn;
                })
                ->rawColumns(['actions'])
                ->make();
        } else {
            notify()->warning('Sunucuda bir hata oluştu, lütfen daha sonra tekrar deneyiniz.', 'Sunucu Hatası');
            return redirect()->back();
        }
    }

    /**
     * @param Request $request
     * @return JsonResponse|RedirectResponse
     * @throws Exception
     */
    public function typesTable(Request $request): JsonResponse|RedirectResponse
    {
        if ($request->ajax()) {
            $data = DB::table('user_types')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    return $row->status == 1 ? 'Aktif' : 'Pasif';
                })
                ->addColumn('actions', function ($row) {
                    $btn = "
                    <div class=\"dropdown\">
                        <button
                         class=\"btn btn-primary dropdown-toggle\"
                         type=\"button\"
                         id=\"optionsDropdown\"
                         data-bs-toggle=\"dropdown\"
                         aria-expanded=\"false\"
                        >
                        Seçenekler
                        </button>
                        <ul
                         class=\"dropdown-menu\"
                         aria-labelledby=\"optionsDropdown\"
                        >
                        <li>
                            <div class='dropdown-item'>
                                <a href='/dashboard/users/types/" . $row->type_id . "/edit' class='edit btn btn-primary btn-sm'>
                                    Düzenle
                                </a>
                            </div>
                        </li>
                        <li>
                            <form
                             action='/dashboard/users/types/" . $row->type_id . "/delete'
                             method='POST'
                             class='dropdown-item'
                            >
                                <input type='hidden' name='_method' value='delete'>
                                <input type='hidden' name='_token' value='" . csrf_field() . "'>
                                <button type='submit' class='btn btn-danger btn-sm'>Sil</button>
                            </form>
                        </li>
                        </ul>
                    </div>
                    ";
                    return $btn;
                })
                ->rawColumns([
                    'actions'
                ])
                ->make();
        } else {
            notify()->warning('Sunucuda bir hata oluştu, lütfen daha sonra tekrar deneyiniz.', 'Sunucu Hatası');
            return redirect()->back();
        }
    }

    /**
     * @param Request $request
     * @return JsonResponse|RedirectResponse
     * @throws Exception
     */
    public function servicesTable(Request $request): JsonResponse|RedirectResponse
    {
        if ($request->ajax()) {
            $data = DB::table('services')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    return $row->status == 1 ? 'Aktif' : 'Pasif';
                })
                ->addColumn('actions', function ($row) {
                    $btn = "
                    <div class=\"dropdown\">
                        <button
                         class=\"btn btn-primary dropdown-toggle\"
                         type=\"button\"
                         id=\"optionsDropdown\"
                         data-bs-toggle=\"dropdown\"
                         aria-expanded=\"false\"
                        >
                        Seçenekler
                        </button>
                        <ul
                         class=\"dropdown-menu\"
                         aria-labelledby=\"optionsDropdown\"
                        >
                        <li>
                            <div class='dropdown-item'>
                                <a href='/dashboard/users/types/" . $row->service_id . "/edit' class='edit btn btn-primary btn-sm'>
                                    Düzenle
                                </a>
                            </div>
                        </li>
                        <li>
                            <form
                             action='/dashboard/users/types/" . $row->service_id . "/delete'
                             method='POST'
                             class='dropdown-item'
                            >
                                <input type='hidden' name='_method' value='delete'>
                                <input type='hidden' name='_token' value='" . csrf_field() . "'>
                                <button type='submit' class='btn btn-danger btn-sm'>Sil</button>
                            </form>
                        </li>
                        </ul>
                    </div>
                    ";
                    return $btn;
                })
                ->rawColumns(['actions'])
                ->make();
        } else {
            notify()->warning('Sunucuda bir hata oluştu, lütfen daha sonra tekrar deneyiniz.', 'Sunucu Hatası');
            return redirect()->back();
        }
    }

    /**
     * @param Request $request
     * @return JsonResponse|RedirectResponse
     * @throws Exception
     */
    public function rolesTable(Request $request): JsonResponse|RedirectResponse
    {
        if ($request->ajax()) {
            $data = DB::table('user_roles')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('user_type_id', function ($row) {
                    return UserType::find($row->user_type_id)->name;
                })
                ->addColumn('service_type_id', function ($row) {
                    return Service::find($row->service_id)->name;
                })
                ->addColumn('can_view', function ($row) {
                    return $row->can_view == 1 ? 'Var' : 'Yok';
                })
                ->addColumn('can_create', function ($row) {
                    return $row->can_view == 1 ? 'Var' : 'Yok';
                })
                ->addColumn('can_update', function ($row) {
                    return $row->can_view == 1 ? 'Var' : 'Yok';
                })
                ->addColumn('can_delete', function ($row) {
                    return $row->can_view == 1 ? 'Var' : 'Yok';
                })
                ->addColumn('status', function ($row) {
                    return $row->status == 1 ? 'Aktif' : 'Pasif';
                })
                ->addColumn('actions', function ($row) {
                    $btn = "
                    <div class=\"dropdown\">
                        <button
                         class=\"btn btn-primary dropdown-toggle\"
                         type=\"button\"
                         id=\"optionsDropdown\"
                         data-bs-toggle=\"dropdown\"
                         aria-expanded=\"false\"
                        >
                        Seçenekler
                        </button>
                        <ul
                         class=\"dropdown-menu\"
                         aria-labelledby=\"optionsDropdown\"
                        >
                        <li>
                            <div class='dropdown-item'>
                                <a href='/dashboard/users/types/" . $row->role_id . "/edit' class='edit btn btn-primary btn-sm'>
                                    Düzenle
                                </a>
                            </div>
                        </li>
                        <li>
                            <form
                             action='/dashboard/users/types/" . $row->role_id . "/delete'
                             method='POST'
                             class='dropdown-item'
                            >
                                <input type='hidden' name='_method' value='delete'>
                                <input type='hidden' name='_token' value='" . csrf_field() . "'>
                                <button type='submit' class='btn btn-danger btn-sm'>Sil</button>
                            </form>
                        </li>
                        </ul>
                    </div>
                    ";
                    return $btn;
                })
                ->rawColumns(['actions'])
                ->make();
        } else {
            notify()->warning('Sunucuda bir hata oluştu, lütfen daha sonra tekrar deneyiniz.', 'Sunucu Hatası');
            return redirect()->back();
        }
    }

    /**
     * @param Request $request
     * @return JsonResponse|RedirectResponse
     * @throws Exception
     */
    public function productsTable(Request $request): JsonResponse|RedirectResponse
    {
        if ($request->ajax()) {
            $data = Product::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('created_at', function ($row) {
                    return $row->created_at->format('d/m/Y');
                })
                ->addColumn('updated_at', function ($row) {
                    return $row->updated_at->format('d/m/Y');
                })
                ->addColumn('actions', function ($row) {
                    $btn = "
                    <div class=\"dropdown\">
                        <button
                         class=\"btn btn-primary dropdown-toggle\"
                         type=\"button\"
                         id=\"optionsDropdown\"
                         data-bs-toggle=\"dropdown\"
                         aria-expanded=\"false\"
                        >
                        Seçenekler
                        </button>
                        <ul
                         class=\"dropdown-menu\"
                         aria-labelledby=\"optionsDropdown\"
                        >
                        <li>
                            <div class='dropdown-item'>
                                <a href='/dashboard/users/types/" . $row->product_id . "/edit' class='edit btn btn-primary btn-sm'>
                                    Düzenle
                                </a>
                            </div>
                        </li>
                        <li>
                            <form
                             action='/dashboard/users/types/" . $row->product_id . "/delete'
                             method='POST'
                             class='dropdown-item'
                            >
                                <input type='hidden' name='_method' value='delete'>
                                <input type='hidden' name='_token' value='" . csrf_field() . "'>
                                <button type='submit' class='btn btn-danger btn-sm'>Sil</button>
                            </form>
                        </li>
                        </ul>
                    </div>
                    ";
                    return $btn;
                })
                ->rawColumns(['actions'])
                ->make();
        } else {
            notify()->warning('Sunucuda bir hata oluştu, lütfen daha sonra tekrar deneyiniz.', 'Sunucu Hatası');
            return redirect()->back();
        }
    }

    /**
     * @param Request $request
     * @return JsonResponse|RedirectResponse
     * @throws Exception
     */
    public function ordersTable(Request $request): JsonResponse|RedirectResponse
    {
        if ($request->ajax()) {
            $data = Order::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('created_at', function ($row) {
                    return $row->created_at->format('d/m/Y');
                })
                ->addColumn('updated_at', function ($row) {
                    return $row->updated_at->format('d/m/Y');
                })
                ->addColumn('actions', function ($row) {
                    $btn = "
                    <div class=\"dropdown\">
                        <button
                         class=\"btn btn-primary dropdown-toggle\"
                         type=\"button\"
                         id=\"optionsDropdown\"
                         data-bs-toggle=\"dropdown\"
                         aria-expanded=\"false\"
                        >
                        Seçenekler
                        </button>
                        <ul
                         class=\"dropdown-menu\"
                         aria-labelledby=\"optionsDropdown\"
                        >
                        <li>
                            <div class='dropdown-item'>
                                <a href='/dashboard/users/types/" . $row->order_id . "/edit' class='edit btn btn-primary btn-sm'>
                                    Düzenle
                                </a>
                            </div>
                        </li>
                        <li>
                            <form
                             action='/dashboard/users/types/" . $row->order_id . "/delete'
                             method='POST'
                             class='dropdown-item'
                            >
                                <input type='hidden' name='_method' value='delete'>
                                <input type='hidden' name='_token' value='" . csrf_field() . "'>
                                <button type='submit' class='btn btn-danger btn-sm'>Sil</button>
                            </form>
                        </li>
                        </ul>
                    </div>
                    ";
                    return $btn;
                })
                ->rawColumns(['actions'])
                ->make();
        } else {
            notify()->warning('Sunucuda bir hata oluştu, lütfen daha sonra tekrar deneyiniz.', 'Sunucu Hatası');
            return redirect()->back();
        }
    }

    /**
     * @param Request $request
     * @return JsonResponse|RedirectResponse
     * @throws Exception
     */
    public function categoriesTable(Request $request): JsonResponse|RedirectResponse
    {
        if ($request->ajax()) {
            $data = Category::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('created_at', function ($row) {
                    return $row->created_at->format('d/m/Y');
                })
                ->addColumn('updated_at', function ($row) {
                    return $row->updated_at->format('d/m/Y');
                })
                ->addColumn('actions', function ($row) {
                    $btn = "
                    <div class=\"dropdown\">
                        <button
                         class=\"btn btn-primary dropdown-toggle\"
                         type=\"button\"
                         id=\"optionsDropdown\"
                         data-bs-toggle=\"dropdown\"
                         aria-expanded=\"false\"
                        >
                        Seçenekler
                        </button>
                        <ul
                         class=\"dropdown-menu\"
                         aria-labelledby=\"optionsDropdown\"
                        >
                        <li>
                            <div class='dropdown-item'>
                                <a href='/dashboard/users/types/" . $row->category_id . "/edit' class='edit btn btn-primary btn-sm'>
                                    Düzenle
                                </a>
                            </div>
                        </li>
                        <li>
                            <form
                             action='/dashboard/users/types/" . $row->category_id . "/delete'
                             method='POST'
                             class='dropdown-item'
                            >
                                <input type='hidden' name='_method' value='delete'>
                                <input type='hidden' name='_token' value='" . csrf_field() . "'>
                                <button type='submit' class='btn btn-danger btn-sm'>Sil</button>
                            </form>
                        </li>
                        </ul>
                    </div>
                    ";
                    return $btn;
                })
                ->rawColumns(['actions'])
                ->make();
        } else {
            notify()->warning('Sunucuda bir hata oluştu, lütfen daha sonra tekrar deneyiniz.', 'Sunucu Hatası');
            return redirect()->back();
        }
    }
}
