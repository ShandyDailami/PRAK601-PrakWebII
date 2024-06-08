<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookModel;

class BukuController extends BaseController
{
  public function index()
  {
    $books = new BookModel();
    $data['buku'] = $books->findAll();
echo view('admin_list_buku', $data);
}
public function create() {
  $validation = \Config\Services::validation();
  $validation->setRules([
    'judul' => 'required',
    'penulis' => 'required',
    'penerbit' => 'required',
    'tahun_terbit' => 'required|numeric'
]);
  $isDataValid = $validation->withRequest($this->request)->run();

  if($isDataValid) {
    $books = new BookModel();
    $books->insert([
      'judul' => $this->request->getPost('judul'),
      'penulis' => $this->request->getPost('penulis'),
      'penerbit' => $this->request->getPost('penerbit'),
      'tahun_terbit' => $this->request->getPost('tahun_terbit'),
    ]);
    return redirect('admin/view');
  }

  echo view('admin_create_books');
}
  public function edit($id)
  {
    $books = new BookModel();
    $data['buku'] = $books->where('id', $id)->first();

    $validation = \Config\Services::validation();
    $validation->setRules([
      'judul' => 'required',
      'penulis' => 'required',
      'penerbit' => 'required',
      'tahun_terbit' => 'required|numeric'
  ]);
    $isDataValid = $validation->withRequest($this->request)->run();
    if($isDataValid) {
      $books->update($id, [
        'judul' => $this->request->getPost('judul'),
        'penulis' => $this->request->getPost('penulis'),
        'penerbit' => $this->request->getPost('penerbit'),
        'tahun_terbit' => $this->request->getPost('tahun_terbit'),
      ]);
      return redirect('admin/view');
    }
    echo view('admin_edit_books', $data);
  }
  public function delete($id)
  {
    $buku = new BookModel();
    $buku->delete($id);
    return redirect()->to('admin/view');
  }
}