<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Mahasiswa</title>
</head>
<body data-theme="light" class="min-h-screen bg-base-200">
  <h1 class="text-center text-4xl font-bold py-2">Edit Mahasiswa</h1>

  <form method="post" class="card w-9/12 mx-auto rounded-sm m-2 bg-white p-5">
    <div class="flex flex-col">
      <label class="label">Nama:</label>
      <input 
        type="text" 
        name="nama" 
        class="input input-sm rounded-sm input-bordered"
        value="<?= htmlspecialchars($data['nama']) ?>"
      >

      <label class="label">Email:</label>
      <input 
        type="text" 
        name="email" 
        class="input input-bordered rounded-sm input-sm"
        value="<?= htmlspecialchars($data['email']) ?>"
      >

      <label class="label">No HP:</label>
      <input 
        type="number" 
        name="no_hp" 
        class="input input-bordered rounded-sm input-sm"
        value="<?= htmlspecialchars($data['no_hp']) ?>"
      >

      <label class="label">Semester:</label>
      <input 
        type="number" 
        name="semester" 
        class="input input-bordered input-sm rounded-sm"
        value="<?= htmlspecialchars($data['semester']) ?>"
      >

      <label class="label">IPK:</label>
      <input 
        type="number" 
        name="ipk" 
        class="input input-bordered input-sm rounded-sm"
        value="<?= htmlspecialchars($data['ipk']) ?>"
      >

      <label class="label">Beasiswa:</label>
      <input 
        type="text" 
        name="beasiswa" 
        class="input input-bordered input-sm rounded-sm"
        value="<?= htmlspecialchars($data['beasiswa']) ?>"
      >

      <label class="label">Berkas:</label>
      <input 
        type="text" 
        name="berkas" 
        class="input input-bordered input-sm rounded-sm"
        value="<?= htmlspecialchars($data['berkas']) ?>"
      >

      <button class="btn btn-success my-2 btn-sm text-white">+ Edit Data</button>
    </div>
  </form>
</body>
</html>

