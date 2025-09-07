<?php

	namespace Hasokeyk\Ticimax\Products;

	class TicimaxProductSettingsModel{

		public $AciklamaGuncelle                          = false;
		public $AdwordsAciklamaGuncelle                   = false;
		public $AdwordsKategoriGuncelle                   = false;
		public $AdwordsTipGuncelle                        = false;
		public $AktifGuncelle                             = false;
		public $AktifPazaryeriListGuncelle                = false;
		public $AlanAdi                                   = '';
		public $AnaKategoriId                             = 0;
		public $AramaAnahtarKelimeGuncelle                = false;
		public $AsortiGrupGuncelle                        = false;
		public $Base64Resim                               = false;
		public $DegerTanim                                = '';
		public $EntegrasyonKodu                           = '';
		public $EtiketGuncelle                            = false;
		public $FBStoreGosterGuncelle                     = false;
		public $FirsatUrunuGuncelle                       = false;
		public $HediyeIpucuGosterGuncelle                 = false;
		public $IlgiliUrunResimGuncelle                   = false;
		public $KargoTipiGuncelle                         = false;
		public $KategoriGuncelle                          = false;
		public $ListedeGosterGuncelle                     = false;
		public $MaksTaksitSayisiGuncelle                  = false;
		public $MarkaGuncelle                             = false;
		public $MarketPlaceAktif2Guncelle                 = false;
		public $MarketPlaceAktif3Guncelle                 = false;
		public $MarketPlaceAktif4Guncelle                 = false;
		public $MarketPlaceAktif5Guncelle                 = false;
		public $MarketPlaceAktifGuncelle                  = false;
		public $MarketPlaceAyarGuncelle                   = false;
		public $MenseiUlkeGuncelle                        = false;
		public $MobilOzelAlanGuncelle                     = false;
		public $OnYaziGuncelle                            = false;
		public $OncekiKategoriEslestirmeleriniTemizle     = false;
		public $OncekiResimleriSil                        = false;
		public $OzelAlan1Guncelle                         = false;
		public $OzelAlan2Guncelle                         = false;
		public $OzelAlan3Guncelle                         = false;
		public $OzelAlan4Guncelle                         = false;
		public $OzelAlan5Guncelle                         = false;
		public $ParaPuanGuncelle                          = false;
		public $PuanKullanimiIptalAktifGuncelle           = false;
		public $RenkKoduGuncelle                          = false;
		public $ResimOlmayanlaraResimEkle                 = false;
		public $ResimleriIndirme                          = false;
		public $SatisBirimiGuncelle                       = false;
		public $SeoAnahtarKelimeGuncelle                  = false;
		public $SeoNoFollowGuncelle                       = false;
		public $SeoNoIndexGuncelle                        = false;
		public $SeoSayfaAciklamaGuncelle                  = false;
		public $SeoSayfaBaslikGuncelle                    = false;
		public $SepetteUcretsizKargoGuncelle              = false;
		public $TahminiTeslimSuresiGosterGuncelle         = false;
		public $TahminiTeslimSuresiGuncelle               = false;
		public $TahminiTeslimSuresiTarihGuncelle          = false;
		public $TedarikciGuncelle                         = false;
		public $TedarikciKodu2GoreGuncelle                = false;
		public $TedarikciKodunaGoreGuncelle               = false;
		public $TedarikciKomisyonGuncelle                 = false;
		public $TeknikDetayGuncelle                       = false;
		public $TumVaryasyonlarStokDusurGuncelle          = false;
		public $UcretsizKargoGuncelle                     = false;
		public $UrunAdediKademeDegerGuncelle              = false;
		public $UrunAdediMinimumDegerGuncelle             = false;
		public $UrunAdediOndalikliSayiGirilebilirGuncelle = false;
		public $UrunAdediVarsayilanDegerGuncelle          = false;
		public $UrunAdiGuncelle                           = false;
		public $UrunAdresiniElleOlustur                   = false;
		public $UrunKapasiteGuncelle                      = false;
		public $UrunKapidaOdemeYasakliGuncelle            = false;
		public $UrunResimGuncelle                         = false;
		public $UrunTipiGuncelle                          = false;
		public $UserAgent                                 = '';
		public $UyeAlimMaksGuncelle                       = false;
		public $UyeAlimMinGuncelle                        = false;
		public $VergiIstisnaKoduGuncelle                  = false;
		public $VitrinGuncelle                            = false;
		public $VitrinSiraSabitGuncelle                   = false;
		public $YayinTarihiGuncelle                       = false;
		public $YeniUrunGuncelle                          = false;
		public $YonlendirmeAdresi                         = false;

		public function set_aktif_pazaryeri_list_guncelle(): void{
			$this->AktifPazaryeriListGuncelle = true;
		}

		public function set_aciklama_guncelle(): void{
			$this->AciklamaGuncelle = true;
		}

		public function set_adwords_aciklama_guncelle(): void{
			$this->AdwordsAciklamaGuncelle = true;
		}

		public function set_adwords_kategori_guncelle(): void{
			$this->AdwordsKategoriGuncelle = true;
		}

		public function set_adwords_tip_guncelle(): void{
			$this->AdwordsTipGuncelle = true;
		}

		public function set_aktif_guncelle(): void{
			$this->AktifGuncelle = true;
		}

		public function set_alan_adi(string $AlanAdi): void{
			$this->AlanAdi = true;
		}

		public function set_ana_kategori_id(int $AnaKategoriId): void{
			$this->AnaKategoriId = true;
		}

		public function set_arama_anahtar_kelime_guncelle(): void{
			$this->AramaAnahtarKelimeGuncelle = true;
		}

		public function set_asorti_grup_guncelle(): void{
			$this->AsortiGrupGuncelle = true;
		}

		public function set_base_64_resim(): void{
			$this->Base64Resim = true;
		}

		public function set_deger_tanim(string $DegerTanim): void{
			$this->DegerTanim = true;
		}

		public function set_entegrasyon_kodu(string $EntegrasyonKodu): void{
			$this->EntegrasyonKodu = true;
		}

		public function set_etiket_guncelle(): void{
			$this->EtiketGuncelle = true;
		}

		public function set_FB_store_goster_guncelle(): void{
			$this->FBStoreGosterGuncelle = true;
		}

		public function set_firsat_urunu_guncelle(): void{
			$this->FirsatUrunuGuncelle = true;
		}

		public function set_hediye_ipucu_goster_guncelle(): void{
			$this->HediyeIpucuGosterGuncelle = true;
		}

		public function set_ilgili_urun_resim_guncelle(): void{
			$this->IlgiliUrunResimGuncelle = true;
		}

		public function set_kargo_tipi_guncelle(): void{
			$this->KargoTipiGuncelle = true;
		}

		public function set_kategori_guncelle(): void{
			$this->KategoriGuncelle = true;
		}

		public function set_listede_goster_guncelle(): void{
			$this->ListedeGosterGuncelle = true;
		}

		public function set_maks_taksit_sayisi_guncelle(): void{
			$this->MaksTaksitSayisiGuncelle = true;
		}

		public function set_marka_guncelle(): void{
			$this->MarkaGuncelle = true;
		}

		public function set_market_place_aktif_2_guncelle(): void{
			$this->MarketPlaceAktif2Guncelle = true;
		}

		public function set_market_place_aktif_3_guncelle(): void{
			$this->MarketPlaceAktif3Guncelle = true;
		}

		public function set_market_place_aktif_4_guncelle(): void{
			$this->MarketPlaceAktif4Guncelle = true;
		}

		public function set_market_place_aktif_5_guncelle(): void{
			$this->MarketPlaceAktif5Guncelle = true;
		}

		public function set_market_place_aktif_guncelle(): void{
			$this->MarketPlaceAktifGuncelle = true;
		}

		public function set_market_place_ayar_guncelle(): void{
			$this->MarketPlaceAyarGuncelle = true;
		}

		public function set_mensei_ulke_guncelle(): void{
			$this->MenseiUlkeGuncelle = true;
		}

		public function set_mobil_ozel_alan_guncelle(): void{
			$this->MobilOzelAlanGuncelle = true;
		}

		public function set_on_yazi_guncelle(): void{
			$this->OnYaziGuncelle = true;
		}

		public function set_onceki_kategori_eslestirmelerini_temizle(): void{
			$this->OncekiKategoriEslestirmeleriniTemizle = true;
		}

		public function set_onceki_resimleri_sil(): void{
			$this->OncekiResimleriSil = true;
		}

		public function set_ozel_alan_1_guncelle(): void{
			$this->OzelAlan1Guncelle = true;
		}

		public function set_ozel_alan_2_guncelle(): void{
			$this->OzelAlan2Guncelle = true;
		}

		public function set_ozel_alan_3_guncelle(): void{
			$this->OzelAlan3Guncelle = true;
		}

		public function set_ozel_alan_4_guncelle(): void{
			$this->OzelAlan4Guncelle = true;
		}

		public function set_ozel_alan_5_guncelle(): void{
			$this->OzelAlan5Guncelle = true;
		}

		public function set_para_puan_guncelle(): void{
			$this->ParaPuanGuncelle = true;
		}

		public function set_puan_kullanimi_iptal_aktif_guncelle(): void{
			$this->PuanKullanimiIptalAktifGuncelle = true;
		}

		public function set_renk_kodu_guncelle(): void{
			$this->RenkKoduGuncelle = true;
		}

		public function set_resim_olmayanlara_resim_ekle(): void{
			$this->ResimOlmayanlaraResimEkle = true;
		}

		public function set_resimleri_indirme(): void{
			$this->ResimleriIndirme = true;
		}

		public function set_satis_birimi_guncelle(): void{
			$this->SatisBirimiGuncelle = true;
		}

		public function set_seo_anahtar_kelime_guncelle(): void{
			$this->SeoAnahtarKelimeGuncelle = true;
		}

		public function set_seo_no_follow_guncelle(): void{
			$this->SeoNoFollowGuncelle = true;
		}

		public function set_seo_no_index_guncelle(): void{
			$this->SeoNoIndexGuncelle = true;
		}

		public function set_seo_sayfa_aciklama_guncelle(): void{
			$this->SeoSayfaAciklamaGuncelle = true;
		}

		public function set_seo_sayfa_baslik_guncelle(): void{
			$this->SeoSayfaBaslikGuncelle = true;
		}

		public function set_sepette_ucretsiz_kargo_guncelle(): void{
			$this->SepetteUcretsizKargoGuncelle = true;
		}

		public function set_tahmini_teslim_suresi_goster_guncelle(): void{
			$this->TahminiTeslimSuresiGosterGuncelle = true;
		}

		public function set_tahmini_teslim_suresi_guncelle(): void{
			$this->TahminiTeslimSuresiGuncelle = true;
		}

		public function set_tahmini_teslim_suresi_tarih_guncelle(): void{
			$this->TahminiTeslimSuresiTarihGuncelle = true;
		}

		public function set_tedarikci_guncelle(): void{
			$this->TedarikciGuncelle = true;
		}

		public function set_tedarikci_kodu_2_gore_guncelle(): void{
			$this->TedarikciKodu2GoreGuncelle = true;
		}

		public function set_tedarikci_koduna_gore_guncelle(): void{
			$this->TedarikciKodunaGoreGuncelle = true;
		}

		public function set_tedarikci_komisyon_guncelle(): void{
			$this->TedarikciKomisyonGuncelle = true;
		}

		public function set_teknik_detay_guncelle(): void{
			$this->TeknikDetayGuncelle = true;
		}

		public function set_tum_varyasyonlar_stok_dusur_guncelle(): void{
			$this->TumVaryasyonlarStokDusurGuncelle = true;
		}

		public function set_ucretsiz_kargo_guncelle(): void{
			$this->UcretsizKargoGuncelle = true;
		}

		public function set_urun_adedi_kademe_deger_guncelle(): void{
			$this->UrunAdediKademeDegerGuncelle = true;
		}

		public function set_urun_adedi_minimum_deger_guncelle(): void{
			$this->UrunAdediMinimumDegerGuncelle = true;
		}

		public function set_urun_adedi_ondalikli_sayi_girilebilir_guncelle(): void{
			$this->UrunAdediOndalikliSayiGirilebilirGuncelle = true;
		}

		public function set_urun_adedi_varsayilan_deger_guncelle(): void{
			$this->UrunAdediVarsayilanDegerGuncelle = true;
		}

		public function set_urun_adi_guncelle(): void{
			$this->UrunAdiGuncelle = true;
		}

		public function set_urun_adresini_elle_olustur(): void{
			$this->UrunAdresiniElleOlustur = true;
		}

		public function set_urun_kapasite_guncelle(): void{
			$this->UrunKapasiteGuncelle = true;
		}

		public function set_urun_kapida_odeme_yasakli_guncelle(): void{
			$this->UrunKapidaOdemeYasakliGuncelle = true;
		}

		public function set_urun_resim_guncelle(): void{
			$this->UrunResimGuncelle = true;
		}

		public function set_urun_tipi_guncelle(): void{
			$this->UrunTipiGuncelle = true;
		}

		public function set_user_agent(string $UserAgent): void{
			$this->UserAgent = true;
		}

		public function set_uye_alim_maks_guncelle(): void{
			$this->UyeAlimMaksGuncelle = true;
		}

		public function set_uye_alim_min_guncelle(): void{
			$this->UyeAlimMinGuncelle = true;
		}

		public function set_vergi_istisna_kodu_guncelle(): void{
			$this->VergiIstisnaKoduGuncelle = true;
		}

		public function set_vitrin_guncelle(): void{
			$this->VitrinGuncelle = true;
		}

		public function set_vitrin_sira_sabit_guncelle(): void{
			$this->VitrinSiraSabitGuncelle = true;
		}

		public function set_yayin_tarihi_guncelle(): void{
			$this->YayinTarihiGuncelle = true;
		}

		public function set_yeni_urun_guncelle(): void{
			$this->YeniUrunGuncelle = true;
		}

		public function to_array(): array{
			return [
				'AciklamaGuncelle'                          => $this->AciklamaGuncelle,
				'AdwordsAciklamaGuncelle'                   => $this->AdwordsAciklamaGuncelle,
				'AdwordsKategoriGuncelle'                   => $this->AdwordsKategoriGuncelle,
				'AdwordsTipGuncelle'                        => $this->AdwordsTipGuncelle,
				'AktifGuncelle'                             => $this->AktifGuncelle,
				'AktifPazaryeriListGuncelle'                => $this->AktifPazaryeriListGuncelle,
				'AlanAdi'                                   => $this->AlanAdi ?? '',
				'AnaKategoriId'                             => $this->AnaKategoriId ?? 0,
				'AramaAnahtarKelimeGuncelle'                => $this->AramaAnahtarKelimeGuncelle,
				'AsortiGrupGuncelle'                        => $this->AsortiGrupGuncelle,
				'Base64Resim'                               => $this->Base64Resim,
				'DegerTanim'                                => $this->DegerTanim ?? '',
				'EntegrasyonKodu'                           => $this->EntegrasyonKodu ?? '',
				'EtiketGuncelle'                            => $this->EtiketGuncelle,
				'FBStoreGosterGuncelle'                     => $this->FBStoreGosterGuncelle,
				'FirsatUrunuGuncelle'                       => $this->FirsatUrunuGuncelle,
				'HediyeIpucuGosterGuncelle'                 => $this->HediyeIpucuGosterGuncelle,
				'IlgiliUrunResimGuncelle'                   => $this->IlgiliUrunResimGuncelle,
				'KargoTipiGuncelle'                         => $this->KargoTipiGuncelle,
				'KategoriGuncelle'                          => $this->KategoriGuncelle,
				'ListedeGosterGuncelle'                     => $this->ListedeGosterGuncelle,
				'MaksTaksitSayisiGuncelle'                  => $this->MaksTaksitSayisiGuncelle,
				'MarkaGuncelle'                             => $this->MarkaGuncelle,
				'MarketPlaceAktif2Guncelle'                 => $this->MarketPlaceAktif2Guncelle,
				'MarketPlaceAktif3Guncelle'                 => $this->MarketPlaceAktif3Guncelle,
				'MarketPlaceAktif4Guncelle'                 => $this->MarketPlaceAktif4Guncelle,
				'MarketPlaceAktif5Guncelle'                 => $this->MarketPlaceAktif5Guncelle,
				'MarketPlaceAktifGuncelle'                  => $this->MarketPlaceAktifGuncelle,
				'MarketPlaceAyarGuncelle'                   => $this->MarketPlaceAyarGuncelle,
				'MenseiUlkeGuncelle'                        => $this->MenseiUlkeGuncelle,
				'MobilOzelAlanGuncelle'                     => $this->MobilOzelAlanGuncelle,
				'OnYaziGuncelle'                            => $this->OnYaziGuncelle,
				'OncekiKategoriEslestirmeleriniTemizle'     => $this->OncekiKategoriEslestirmeleriniTemizle,
				'OncekiResimleriSil'                        => $this->OncekiResimleriSil,
				'OzelAlan1Guncelle'                         => $this->OzelAlan1Guncelle,
				'OzelAlan2Guncelle'                         => $this->OzelAlan2Guncelle,
				'OzelAlan3Guncelle'                         => $this->OzelAlan3Guncelle,
				'OzelAlan4Guncelle'                         => $this->OzelAlan4Guncelle,
				'OzelAlan5Guncelle'                         => $this->OzelAlan5Guncelle,
				'ParaPuanGuncelle'                          => $this->ParaPuanGuncelle,
				'PuanKullanimiIptalAktifGuncelle'           => $this->PuanKullanimiIptalAktifGuncelle,
				'RenkKoduGuncelle'                          => $this->RenkKoduGuncelle,
				'ResimOlmayanlaraResimEkle'                 => $this->ResimOlmayanlaraResimEkle,
				'ResimleriIndirme'                          => $this->ResimleriIndirme,
				'SatisBirimiGuncelle'                       => $this->SatisBirimiGuncelle,
				'SeoAnahtarKelimeGuncelle'                  => $this->SeoAnahtarKelimeGuncelle,
				'SeoNoFollowGuncelle'                       => $this->SeoNoFollowGuncelle,
				'SeoNoIndexGuncelle'                        => $this->SeoNoIndexGuncelle,
				'SeoSayfaAciklamaGuncelle'                  => $this->SeoSayfaAciklamaGuncelle,
				'SeoSayfaBaslikGuncelle'                    => $this->SeoSayfaBaslikGuncelle,
				'SepetteUcretsizKargoGuncelle'              => $this->SepetteUcretsizKargoGuncelle,
				'TahminiTeslimSuresiGosterGuncelle'         => $this->TahminiTeslimSuresiGosterGuncelle,
				'TahminiTeslimSuresiGuncelle'               => $this->TahminiTeslimSuresiGuncelle,
				'TahminiTeslimSuresiTarihGuncelle'          => $this->TahminiTeslimSuresiTarihGuncelle,
				'TedarikciGuncelle'                         => $this->TedarikciGuncelle,
				'TedarikciKodu2GoreGuncelle'                => $this->TedarikciKodu2GoreGuncelle,
				'TedarikciKodunaGoreGuncelle'               => $this->TedarikciKodunaGoreGuncelle,
				'TedarikciKomisyonGuncelle'                 => $this->TedarikciKomisyonGuncelle,
				'TeknikDetayGuncelle'                       => $this->TeknikDetayGuncelle,
				'TumVaryasyonlarStokDusurGuncelle'          => $this->TumVaryasyonlarStokDusurGuncelle,
				'UcretsizKargoGuncelle'                     => $this->UcretsizKargoGuncelle,
				'UrunAdediKademeDegerGuncelle'              => $this->UrunAdediKademeDegerGuncelle,
				'UrunAdediMinimumDegerGuncelle'             => $this->UrunAdediMinimumDegerGuncelle,
				'UrunAdediOndalikliSayiGirilebilirGuncelle' => $this->UrunAdediOndalikliSayiGirilebilirGuncelle,
				'UrunAdediVarsayilanDegerGuncelle'          => $this->UrunAdediVarsayilanDegerGuncelle,
				'UrunAdiGuncelle'                           => $this->UrunAdiGuncelle,
				'UrunAdresiniElleOlustur'                   => $this->UrunAdresiniElleOlustur,
				'UrunKapasiteGuncelle'                      => $this->UrunKapasiteGuncelle,
				'UrunKapidaOdemeYasakliGuncelle'            => $this->UrunKapidaOdemeYasakliGuncelle,
				'UrunResimGuncelle'                         => $this->UrunResimGuncelle,
				'UrunTipiGuncelle'                          => $this->UrunTipiGuncelle,
				'UserAgent'                                 => $this->UserAgent,
				'UyeAlimMaksGuncelle'                       => $this->UyeAlimMaksGuncelle,
				'UyeAlimMinGuncelle'                        => $this->UyeAlimMinGuncelle,
				'VergiIstisnaKoduGuncelle'                  => $this->VergiIstisnaKoduGuncelle,
				'VitrinGuncelle'                            => $this->VitrinGuncelle,
				'VitrinSiraSabitGuncelle'                   => $this->VitrinSiraSabitGuncelle,
				'YayinTarihiGuncelle'                       => $this->YayinTarihiGuncelle,
				'YeniUrunGuncelle'                          => $this->YeniUrunGuncelle,
			];
		}

	}