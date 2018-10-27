<?php 

// membuat class biodata
 class Biodata{

 	// menyimpan data dalam array
 	public $data = [];

 	// fungsi nama
 	public function nama($nama)
 	{
 		$this->data['name'] = $nama;
 		return $this;
 	}

 	// fungsi alamat
 	public function alamat($alamat)
 	{
 		$this->data['address'] = $alamat;
 		return $this;
 	}

 	// fungsi hobi
 	public function hobi($hobi = array())
 	{
 		$this->data['hobbies'] = $hobi;
 		return $this;
 	}
 	
 	// fungsi menikah
 	public function menikah($menikah)
 	{
 		$this->data['is_married'] = $menikah;
 		return $this;
 	}
 	
 	// fungsi sekolah
 	public function sekolah($sekolah = array())
 	{
 		$this->data['school'] = $sekolah;
 		return $this;
 	}

 	// fungsi kemampuan
 	public function kemampuan($kemampuan = array())
 	{
 		$this->data['skills'] = $kemampuan;
 		return $this;
 	}

 	// fungsi konvert ke json
 	public function konjson(){
 		return json_encode($this, JSON_PRETTY_PRINT);
 	}
 	
}

$biodata 	= new Biodata();
$nama		= "Hamdan Ibrahim";
$alamat		= "Ds.Jadimulya GG.Mushollah No.88 RT.03 RW.01 Kab.Cirebon Kec.Gunung Jati Prov.Jawa Barat";
$hobi 		= ['Sepedah','Bulu Tangkis','Membaca Berita','Ngoding'];
$sekolah	= [
				"hightSchool" 	=> "SMK Negeri 1 Kedawung",
				"university" 	=> ""
			  ];
$kemampuan	= [
				"Web"		=> ['HTML','CSS','PHP'],
				"Olahraga"	=> ['Sepedah']
			  ];
print_r($biodata->nama($nama)
				->alamat($alamat)
				->hobi($hobi)
				->menikah(false)
				->sekolah($sekolah)
				->kemampuan($kemampuan)
				->konjson()
);
