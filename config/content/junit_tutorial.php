Kali ini kita mengimplementasikan Junit Framework kedalam project Java yang sudah dibuat.
Pertama download library Junit <a href="https://junit.org/junit4/" target="_blank">disini</a>.
Disini saya masih menggunakan <strong>JUnit 4</strong> dan <strong>Netbeans 8.2</strong>.

</br>
<?php if (!$IS_INDEX) : ?>

<p>1. Pertama buat project baru. Disini saya memilih Java Desktop project.</p>
<div class="text-center img-source">
  <img src="img/junit_tutorial/create_project.PNG" alt="No Image" class="img-thumbnail">
</div>

<p>2. Berikan nama project. Nama bebas saja yang penting diskriptif.</p>
<div class="text-center img-source">
  <img src="img/junit_tutorial/project_name.PNG" alt="No Image" class="img-thumbnail">
</div>

<p>3. Tambahkan library <code>Hamcrest dan JUnit 4</code>. Disini saya menggunakan library yang sudah bundling dengan Netbeans.</p>
<div class="text-center img-source">
  <img src="img/junit_tutorial/added_library.PNG" alt="No Image" class="img-thumbnail">
</div>

<div class="text-center img-source">
  <img src="img/junit_tutorial/add_library.PNG" alt="No Image" class="img-thumbnail">
</div>

<div class="text-center img-source">
  <img src="img/junit_tutorial/library.PNG" alt="No Image" class="img-thumbnail">
</div>

<p>4. Kemudian buat file baru yaitu file JUnit Test.</p>
<div class="text-center img-source">
  <img src="img/junit_tutorial/create_junit_file.PNG" alt="No Image" class="img-thumbnail">
</div>

<p>5. Berikan nama test dan disarankan untuk menggunakan nama sesuai dengan module yang dites. Jangan lupa berikan package-nya</p>
<div class="text-center img-source">
  <img src="img/junit_tutorial/name_test.PNG" alt="No Image" class="img-thumbnail">
</div>

<p>6. Disini saya menghapus semua method yang digenerate oleh Netbeans sehingga class menjadi bersih seperti dibawah ini.</p>
<div class="text-center img-source">
  <img src="img/junit_tutorial/initial_code.PNG" alt="No Image" class="img-thumbnail">
</div>

<p>7. Secara sederhana untuk membuat test cukup buat method bertipe Void kemudian berikan <code>@Test</code> annotation disetiap method Void yang ingin ditest. Kemudian sesuaikan Assert Test dengan kebutuhan.</p>
<div class="text-center img-source">
  <img src="img/junit_tutorial/test_code.PNG" alt="No Image" class="img-thumbnail">
</div>

<p>8. Right-Click pada file unit test > Test File.</p>
<div class="text-center img-source">
  <img src="img/junit_tutorial/right_click.PNG" alt="No Image" class="img-thumbnail">
</div>

<p>9. Apabila test sesuai dengan apa yang kita harapkan, maka Netbeans akan memberikan notifikasi bahwa test passed.</p>
<div class="text-center img-source">
  <img src="img/junit_tutorial/result.PNG" alt="No Image" class="img-thumbnail">
</div>

<?php else: ?>
<a href="article?q=junit_tutorial">Read more</a>

<?php endif ?>