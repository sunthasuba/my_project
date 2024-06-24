<?php
namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\CategoryModel;
use CodeIgniter\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll();
        return view('products/index', $data);
    }

    public function create()
    {
        $categoryModel = new CategoryModel();
        $data['categories'] = $categoryModel->findAll();
        return view('products/create', $data);
    }

    public function store()
    {
        $model = new ProductModel();
        $data = [
            'product_name' => $this->request->getPost('product_name'),
            'unit_price' => $this->request->getPost('unit_price'),
            'unit_type' => $this->request->getPost('unit_type'),
            'stock_level' => $this->request->getPost('stock_level'),
            'category_id' => $this->request->getPost('category_id'),
        ];
        $model->save($data);
        return redirect()->to('/products');
    }

    public function edit($id)
    {
        $model = new ProductModel();
        $categoryModel = new CategoryModel();
        $data['product'] = $model->find($id);
        $data['categories'] = $categoryModel->findAll();
        return view('products/edit', $data);
    }

    public function update($id)
    {
        $model = new ProductModel();
        $data = [
            'product_name' => $this->request->getPost('product_name'),
            'unit_price' => $this->request->getPost('unit_price'),
            'unit_type' => $this->request->getPost('unit_type'),
            'stock_level' => $this->request->getPost('stock_level'),
            'category_id' => $this->request->getPost('category_id'),
        ];
        $model->update($id, $data);
        return redirect()->to('/products');
    }

    public function delete($id)
    {
        $model = new ProductModel();
        $model->delete($id);
        return redirect()->to('/products');
    }
}
