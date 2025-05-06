<div class="container-wrapper" id="containerWrapper">
  <div class="content" id="mainContent">
    <div class="page-header px-4">
      <h1>Dokumentasi Flutter Widget</h1>
      <p>Kumpulan widget Flutter umum beserta kode dan contoh tampilannya. Panduan interaktif untuk membangun UI Flutter yang menakjubkan.</p>
    </div>

    <!-- Container Widget -->
    <div class="widget-card" id="container">
      <div class="widget-header">
        <div class="widget-icon">
          <i class="fas fa-box"></i>
        </div>
        <h2 class="widget-title">Container</h2>
      </div>
      <div class="widget-body">
        <p>Widget fleksibel yang bisa digunakan untuk membungkus dan memberi styling pada child widget.</p>

        <pre>
<span class="code-label">Dart</span>
<code>Container(
  padding: EdgeInsets.all(16),
  margin: EdgeInsets.symmetric(vertical: 10),
  decoration: BoxDecoration(
    color: Colors.blue,
    borderRadius: BorderRadius.circular(8),
    boxShadow: [
      BoxShadow(
        color: Colors.black26,
        blurRadius: 10,
        offset: Offset(0, 4),
      ),
    ],
  ),
  child: Text(
    'Di dalam container',
    style: TextStyle(color: Colors.white),
  ),
)</code></pre>

        <div class="img-container">
          <img src="https://flutter.github.io/assets-for-api-docs/assets/widgets/container.png" alt="Container Example" class="img-fluid">
        </div>

        <div class="mt-4">
          <h5>Properti Umum:</h5>
          <ul>
            <li><strong>padding</strong> - Ruang di dalam container</li>
            <li><strong>margin</strong> - Ruang di luar container</li>
            <li><strong>decoration</strong> - Styling visual (warna, border, shadow)</li>
            <li><strong>alignment</strong> - Posisi child di dalam container</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Row Widget -->
    <div class="widget-card" id="row">
      <div class="widget-header">
        <div class="widget-icon">
          <i class="fas fa-arrow-right"></i>
        </div>
        <h2 class="widget-title">Row</h2>
      </div>
      <div class="widget-body">
        <p>Widget untuk menyusun elemen secara horizontal dalam satu baris.</p>

        <pre>
<span class="code-label">Dart</span>
<code>Row(
  mainAxisAlignment: MainAxisAlignment.spaceEvenly,
  children: [
    Icon(Icons.star, color: Colors.amber),
    Text('Rating Item', style: TextStyle(fontWeight: FontWeight.bold)),
    Text('4.9')
  ],
)</code></pre>

        <div class="img-container">
          <img src="https://flutter.github.io/assets-for-api-docs/assets/widgets/row.png" alt="Row Example" class="img-fluid">
        </div>

        <div class="mt-4">
          <h5>Properti Umum:</h5>
          <ul>
            <li><strong>mainAxisAlignment</strong> - Perataan pada sumbu utama (horizontal)</li>
            <li><strong>crossAxisAlignment</strong> - Perataan pada sumbu silang (vertikal)</li>
            <li><strong>children</strong> - Daftar widget yang akan ditampilkan dalam baris</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Column Widget -->
    <div class="widget-card" id="column">
      <div class="widget-header">
        <div class="widget-icon">
          <i class="fas fa-arrow-down"></i>
        </div>
        <h2 class="widget-title">Column</h2>
      </div>
      <div class="widget-body">
        <p>Widget untuk menyusun elemen secara vertikal dalam satu kolom.</p>
        <pre>
                <span class="code-label">Dart</span>
                <code>
  Column(
      mainAxisAlignment: MainAxisAlignment.center,
      crossAxisAlignment: CrossAxisAlignment.start,
      children: [
          Text('Item 1', style: TextStyle(fontSize: 18, fontWeight: FontWeight.bold)),
          SizedBox(height: 8),
          Text('Item 2', style: TextStyle(fontSize: 16)),
          SizedBox(height: 8),
          Text('Item 3', style: TextStyle(fontSize: 14, color: Colors.grey)),
      ],
  )
                </code>
            </pre>

        <div class="img-container">
          <img src="https://flutter.github.io/assets-for-api-docs/assets/widgets/column.png" alt="Column Example" class="img-fluid">
        </div>

        <div class="mt-4">
          <h5>Properti Umum:</h5>
          <ul>
            <li><strong>mainAxisAlignment</strong> - Perataan pada sumbu utama (vertikal)</li>
            <li><strong>crossAxisAlignment</strong> - Perataan pada sumbu silang (horizontal)</li>
            <li><strong>children</strong> - Daftar widget yang akan ditampilkan dalam kolom</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Text Widget -->
    <div class="widget-card" id="text">
      <div class="widget-header">
        <div class="widget-icon">
          <i class="fas fa-font"></i>
        </div>
        <h2 class="widget-title">Text</h2>
      </div>
      <div class="widget-body">
        <p>Digunakan untuk menampilkan teks sederhana dengan berbagai opsi formatting.</p>

        <pre>
<span class="code-label">Dart</span>
<code>Text(
  'Hello, Flutter!',
  style: TextStyle(
    fontSize: 24,
    fontWeight: FontWeight.bold,
    color: Colors.blue,
  ),
)</code></pre>

        <div class="img-container">
          <img src="https://flutter.github.io/assets-for-api-docs/assets/widgets/text.png" alt="Text Example" class="img-fluid">
        </div>

        <div class="mt-4">
          <h5>Properti Umum:</h5>
          <ul>
            <li><strong>style</strong> - Untuk mengatur gaya teks (warna, ukuran, dll)</li>
            <li><strong>textAlign</strong> - Mengatur alignment teks</li>
            <li><strong>overflow</strong> - Menangani teks yang terlalu panjang</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- button -->
    <div class="widget-card" id="button">
      <div class="widget-header">
        <div class="widget-icon">
          <i class="fas fa-arrow-down"></i>
        </div>
        <h2 class="widget-title">Button</h2>
      </div>
      <div class="widget-body">
        <p>Flutter memiliki widget button, yang dapat digunakan untuk membuat tombol, ada beberapa variasi button yang dapat digunakan seperti :</p>
        <h6>Elevated Button</h6>
        <pre>
              <span class="code-label">Dart</span>
              <code>
  1. Basic
  ElevatedButton(onPressed: () {
    // Handle button press
  }, child: Text('Button')),

  2. With custom style
  ElevatedButton(
    style: ElevatedButton.styleFrom(
      backgroundColor: Colors.blue,
      shape: RoundedRectangleBorder(
        borderRadius: BorderRadius.circular(10),
      ),
    ),
    onPressed: () {},
    child: Text('Button'),
  ),
              </code>
          </pre>
        <div class="img-container">
          <div class="col-lg-1 mb-3">
            <img src="./assets/images/buttons/basic_button.png" width="120" alt="Column Example" class="img-fluid">
            <!-- <img src="./assets/images/buttons/rounded_elevated.png" alt="Column Example" class="img-fluid"> -->
          </div>
          <div class="col-lg-1">
            <!-- <img src="https://flutter.github.io/assets-for-api-docs/assets/widgets/column.png" alt="Column Example" class="img-fluid"> -->
            <img src="./assets/images/buttons/rounded_elevated.png" width="120" alt="Column Example" class="img-fluid">
          </div>
        </div>
        <h6 class="mt-3">Outlined Button</h6>
        <pre>
              <span class="code-label">Dart</span>
              <code>
  1. Basic
  ElevatedButton(onPressed: () {
    // Handle button press
  }, child: Text('Button')),

  2. With custom style
  ElevatedButton(
    style: ElevatedButton.styleFrom(
      backgroundColor: Colors.blue,
      shape: RoundedRectangleBorder(
        borderRadius: BorderRadius.circular(10),
      ),
    ),
    onPressed: () {},
    child: Text('Button'),
  ),
              </code>
          </pre>
      </div>
    </div>

    <!-- Utilities -->
    <div class="widget-card" id="colors_utilities">
      <div class="widget-header">
        <div class="widget-icon">
          <i class="fas fa-arrow-down"></i>
        </div>
        <h2 class="widget-title">Color</h2>
      </div>
      <div class="widget-body">
        <p>Coloring pada flutter</p>
        <pre>
              <span class="code-label">Dart</span>
              <code>
  1. Dengan Hex code
    Color(0xff......)

  2. Dengan flutter color
    Color(Colors.red)
              </code>
          </pre>
        <div class="img-container">
          <div class="col-lg-1 mb-3">
            <div class="container w-100 h-100 bg-danger rounded">
              red
            </div>
          </div>
          <div class="col-lg-1">
            <div class="container w-100 h-100 bg-danger rounded">
              red
            </div>
          </div>
        </div>


        <div class="mt-4">
          <h5>Kedua cara akan memberikan result yang sama hanya saja cakupan warna pada hexcode lebih luas dan variatif</h5>
          <ul>
            <li><strong>mainAxisAlignment</strong> - Perataan pada sumbu utama (vertikal)</li>
            <li><strong>crossAxisAlignment</strong> - Perataan pada sumbu silang (horizontal)</li>
            <li><strong>children</strong> - Daftar widget yang akan ditampilkan dalam kolom</li>
          </ul>
        </div>
      </div>
    </div>