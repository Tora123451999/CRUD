Nama = raw_input("nama siswa: ")
indo = int(raw_input("Nilai Bahasa Indonesia: "))
mtk = int(raw_input("Nilai_mtk"))
ipa = int(raw_input("Nilai_Ipa"))
ips = int(raw_input(Nilai_Ips))

rata2 = (ind + mtk + eng + ipa + ips) /5

if rata2 >= 75:
	status = "Lulus"
else:
	status = "Tidak Lulus"

print("Nama: " + nama)
print("Nilai Rata - Rata: " + str(rata2))
print("Hasil Kelulusan: " + status)





















































Nilai Bahasa Indonesia: raw_input("Masukkan Nilai: ")
Nilai Matematika: int(raw_input("Masukan Nilai: "))
Nilai Bahasa Inggris: raw_input("Masukan Nilai: ")
Nilai Ipa: int(raw_input("Masukan Nilai: "))
Nilai ips: raw_input("Masukan Nilai: ")

if(Nilai == 'A'):
    Nilai_Bahasa_Indonesia = Nilai * 0.2
elif(Nilai == 'B'):
    Nilai_Matematika = Nilai  * 0.15
elif(Nilai == 'C'):
    Nilai_Bahasa_inggris = Nilai * 0.10
elif(Nilai == 'D'):
     Nilai_Ipa= Nilai * 0.05
elif(Nilai == 'E'):
     Nilai_Ips= Nilai * 0.05
