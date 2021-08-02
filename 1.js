function hitungVoucher(kode,jumlah_pembayaran){
    var diskon = 0;
   if (kode == "DumbWaysJos" && jumlah_pembayaran >= 50000) {
      let diskon1 = jumlah_pembayaran *21.1/100;
      if(diskon1>20000){
          diskon = 20000;
          
      }
   } else if (kode == "DumbWaysMantap" && jumlah_pembayaran >= 80000) {
       let diskon2 = jumlah_pembayaran*30/100;
       if(diskon2>40000){
           diskon = 40000;
           
       }
   }
   else {
       return 0;
   }
   let kembalian = jumlah_pembayaran - diskon;
   //output
   console.log("Uang yang harus dibayar: "+jumlah_pembayaran);
   console.log("Diskon : "+diskon);
   console.log("kembalian : "+kembalian);
}