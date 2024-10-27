<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  </head>
  <body data-theme="light" class="min-h-screen bg-base-200">
    <h1 class="text-center text-4xl font-bold py-2">Data Mahasiswa</h1>

    <div class="flex flex-wrap justify-center w-full py-5 ">
      <div class="card m-2 p-5 bg-white rounded-sm w-full lg:w-1/2">
        <h1 class="text-2xl font-semibold">List Mahasiswa</h1>
        <div class="overflow-x-auto text-xs">
          <table class="table w-full row-border" id="myTable">
            <thead>
              <tr>
                <th>name</th> 
                <th>ipk</th> 
                <th>email</th>
                <th>action</th>
              </tr>
            </thead> 
            <tbody>
              <?php foreach ($mhs as $data): ?> 
              <tr>
                <td><?=$data['nama']?></td>        
                <td><?=$data['ipk']?></td>        
                <td><?=$data['email']?></td>        
                <td>
                  <a href="deletemahasiswa/<?=$data['id']?>" class="btn rounded-sm btn-error btn-sm text-white">x</a>
                  <a href="editmahasiswa/<?=$data['id']?>" class="btn rounded-sm btn-sm btn-warning text-white">e</a>
                </td>
              </tr>
              <?php endforeach?>
            </tbody>
          </table>
        </div>
      </div>

      <form method="post" class="card w-full lg:w-1/3 rounded-sm m-2 bg-white p-5">
        <div class="flex flex-col">
          <label class="label">nama :</label>
          <input type="text" name="nama" class="input input-sm rounded-sm input-bordered">

          <label class="label">email :</label>
          <input type="text" name="email" class="input input-bordered rounded-sm input-sm">

          <label class="label">no hp:</label>
          <input type="number" name="no_hp" class="input input-bordered rounded-sm input-sm">

          <label class="label">semester :</label>
          <input type="number" name="semester" class="input input-bordered input-sm rounded-sm">

          <label class="label">ipk:</label>
          <input type="number" name="ipk" class="input input-bordered input-sm rounded-sm">

          <label class="label">beasiswa</label>
          <input type="text" name="beasiswa" class="input input-bordered input-sm rounded-sm">

          <label class="label">berkas</label>
          <input type="text" name="berkas" class="input input-bordered input-sm rounded-sm">

          <button class="btn btn-success my-5 btn-sm text-white rounded-sm">+ Tambah data</button>
        </div>
      </form>
    </div>
  </body>
</html>


