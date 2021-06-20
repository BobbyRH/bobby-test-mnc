<h2> Jelaskan fungsi dan pemakaian if else, while, while do, switch case, for, foreach? </h2>
<div>
<h3>if else</h3>
<p>adalah fungsi yang digunakan untuk suatu logika pengkondisian atau percabangan keputusan true dan false, Jika kondisi bernilai true maka kode yang berada pada kurung kurawal(block statement) "if" akan dijalankan dan sebaliknya jika kondisi bernilai false maka kode yang berada pada kurung kurawal(block statement) "else" akan dijalankan. lebih diutamakan untuk mengkondisikan suatu variabel yang type datanya adalah integer tapi tidak menutup kemungkinan bisa dilakukan untuk type data lainnya.  </p>
<p>
if($input >= 0){ <br/>
&nbsp;&nbsp;&nbsp; echo "nilai anda diatas atau sama dengan 0"; <br/>
}else{  <br/>
&nbsp;&nbsp;&nbsp;    echo "nilai anda dibawah 0"; <br/>
} <br/>
</p>
<hr/>

<h3>while</h3>
<p>
fungsi yang digunakan untuk pengulangan berulang kali sampai mendapatkan nilai false;
</p>
<p>
$n = 0; <br/>
while($n > 5){ <br/>
 &nbsp;&nbsp;&nbsp;    echo $n;<br/>
  &nbsp;&nbsp;&nbsp;   $n++; <br/>
} <br/>
</p>
<hr/>


<h3>while do</h3>
<p>
fungsi yang digunakan untuk pengulangan sama seperti while yaitu proses while akan dilakukan setelah do dijalankan 1 kali ;
</p>
<p>
$i=0; <br/>
do <br/>
{ <br/>
  &nbsp;&nbsp;&nbsp; echo "$i"; <br/>
  &nbsp;&nbsp;&nbsp; echo ""; <br/>
  &nbsp;&nbsp;&nbsp; $i=$i+1; <br/>
} while ($i <= 5); <br/>
</p>
<hr/>


<h3>switch case</h3>
<p>adalah fungsi yang digunakan untuk suatu logika pengkondisian atau percabangan keputusan berdasarkan "case" yang telah ditentukan, Jika kondisi bernilai true maka kode yang berada pada block statement "case 'kondisi':break;" yang sesuai dengan kasusnya maka akan dijalankan dan jika tidak ditemukan maka akan mencoba case yang lainnya, jika semua case telah dicoba dan hasilnya tidak ada yang sesuai maka jika terdapat "default:", maka proses  "default:" akan dijalankan. lebih diutamakan untuk mengkondisikan suatu variabel yang type datanya adalah string, bool tapi tidak menutup kemungkinan bisa dilakukan untuk type data lainnya.  </p>

<p>
    $cid = $_POST['category']; <br/>
    switch ($cid) { <br/>
    &nbsp;&nbsp;&nbsp;    case "K01": <br/>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       echo "sport"; <br/>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       break; <br/>
    &nbsp;&nbsp;&nbsp;    case "K02": <br/>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       echo "fashion"; <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        break; <br/>
    &nbsp;&nbsp;&nbsp;    case "K03": <br/>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       echo "technology"; <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        break; <br/>
    &nbsp;&nbsp;&nbsp;    default: <br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        echo "Category not found"; <br/>

    }
</p>
<hr/>


<h3>for</h3>
<p>
fungsi yang digunakan untuk pengulangan berulang kali sesuai dengan batas jumlah pengulangan yang telah ditentukan.
</p>

<p>
for ($i=1; $i<=10; ++$i)<br/>
{<br/>
  &nbsp;&nbsp;&nbsp; echo $i;<br/>
}<br/>
</P>
<hr/>


<h3>foreach</h3>
<p>
fungsi yang sering digunakan untuk pengulangan berulang kali sesuai dengan batas jumlah array yang dimiliki atau total array pada variabel yang telah ditentukan.
</p>
<p>
$foods = array('cake', 'bolu', 'coklat');<br/>
foreach ($foods as $food)<br/>
{<br/>
 &nbsp;&nbsp;&nbsp; echo $food;<br/>
}<br/>
</p>

</div>
<br/><br/>
<a href="/">Back To Step</a>