

document.getElementById("sumar").onclick = function () {


    let b11 = 0; let b12 = 0; let b13 = 0; let b14 = 0; let b15 = 0;    //fila 1b//
    let b16 = 0; let b17 = 0; let b18 = 0; let b19 = 0; let b110 = 0;


    let a11 = 0;
    let a21 = 0;
    let a31 = 0;
    let a41 = 0;
    let a51 = 0;    //columna 1a
    let a61 = 0;
    let a71 = 0;
    let a81 = 0;
    let a91 = 0;
    let a101 = 0;

    if (document.getElementById("b11").checked) { b11 = 1; }
    if (document.getElementById("b12").checked) { b12 = 1; }  //fila 1b//
    if (document.getElementById("b13").checked) { b13 = 1; }
    if (document.getElementById("b14").checked) { b14 = 1; }
    if (document.getElementById("b15").checked) { b15 = 1; }
    if (document.getElementById("b16").checked) { b16 = 1; }
    if (document.getElementById("b17").checked) { b17 = 1; }
    if (document.getElementById("b18").checked) { b18 = 1; }
    if (document.getElementById("b19").checked) { b19 = 1; }
    if (document.getElementById("b110").checked) { b110 = 1; }

    if (document.getElementById("a11").checked) { a11 = 1; }
    if (document.getElementById("a21").checked) { a21 = 1; }   //columna 1a
    if (document.getElementById("a31").checked) { a31 = 1; }
    if (document.getElementById("a41").checked) { a41 = 1; }
    if (document.getElementById("a51").checked) { a51 = 1; }
    if (document.getElementById("a61").checked) { a61 = 1; }
    if (document.getElementById("a71").checked) { a71 = 1; }
    if (document.getElementById("a81").checked) { a81 = 1; }
    if (document.getElementById("a91").checked) { a91 = 1; }
    if (document.getElementById("a101").checked) { a101 = 1; }

    document.getElementById("fisicas").innerHTML = a11 + a21 + a31 + a41 + a51 + a61 + a71 + a81 + a91 + a101 +
        b11 + b12 + b13 + b14 + b15 + b16 + b17 + b18 + b19 + b110;

    let b21 = 0; let b22 = 0; let b23 = 0; let b24 = 0; let b25 = 0;    //fila 2b//
    let b26 = 0; let b27 = 0; let b28 = 0; let b29 = 0; let b210 = 0;


    let a12 = 0;
    let a22 = 0;
    let a32 = 0;
    let a42 = 0;
    let a52 = 0;    //columna 2a
    let a62 = 0;
    let a72 = 0;
    let a82 = 0;
    let a92 = 0;
    let a102 = 0;

    if (document.getElementById("b21").checked) { b21 = 1; }
    if (document.getElementById("b22").checked) { b22 = 1; }  //fila 2b//
    if (document.getElementById("b23").checked) { b23 = 1; }
    if (document.getElementById("b24").checked) { b24 = 1; }
    if (document.getElementById("b25").checked) { b25 = 1; }
    if (document.getElementById("b26").checked) { b26 = 1; }
    if (document.getElementById("b27").checked) { b27 = 1; }
    if (document.getElementById("b28").checked) { b28 = 1; }
    if (document.getElementById("b29").checked) { b29 = 1; }
    if (document.getElementById("b210").checked) { b210 = 1; }

    if (document.getElementById("a12").checked) { a12 = 1; }
    if (document.getElementById("a22").checked) { a22 = 1; }   //columna 2a
    if (document.getElementById("a32").checked) { a32 = 1; }
    if (document.getElementById("a42").checked) { a42 = 1; }
    if (document.getElementById("a52").checked) { a52 = 1; }
    if (document.getElementById("a62").checked) { a62 = 1; }
    if (document.getElementById("a72").checked) { a72 = 1; }
    if (document.getElementById("a82").checked) { a82 = 1; }
    if (document.getElementById("a92").checked) { a92 = 1; }
    if (document.getElementById("a102").checked) { a102 = 1; }

    document.getElementById("biologicas").innerHTML = a12 + a22 + a32 + a42 + a52 + a62 + a72 + a82 + a92 + a102 +
        b21 + b22 + b23 + b24 + b25 + b26 + b27 + b28 + b29 + b210;


    let b31 = 0; let b32 = 0; let b33 = 0; let b34 = 0; let b35 = 0;    //fila 3b//
    let b36 = 0; let b37 = 0; let b38 = 0; let b39 = 0; let b310 = 0;


    let a13 = 0;
    let a23 = 0;
    let a33 = 0;
    let a43 = 0;
    let a53 = 0;    //columna 3a
    let a63 = 0;
    let a73 = 0;
    let a83 = 0;
    let a93 = 0;
    let a103 = 0;

    if (document.getElementById("b31").checked) { b31 = 1; }
    if (document.getElementById("b32").checked) { b32 = 1; }  //fila 3b//
    if (document.getElementById("b33").checked) { b33 = 1; }
    if (document.getElementById("b34").checked) { b34 = 1; }
    if (document.getElementById("b35").checked) { b35 = 1; }
    if (document.getElementById("b36").checked) { b36 = 1; }
    if (document.getElementById("b37").checked) { b37 = 1; }
    if (document.getElementById("b38").checked) { b38 = 1; }
    if (document.getElementById("b39").checked) { b39 = 1; }
    if (document.getElementById("b310").checked) { b310 = 1; }

    if (document.getElementById("a13").checked) { a13 = 1; }
    if (document.getElementById("a23").checked) { a23 = 1; }   //columna 3a
    if (document.getElementById("a33").checked) { a33 = 1; }
    if (document.getElementById("a43").checked) { a43 = 1; }
    if (document.getElementById("a53").checked) { a53 = 1; }
    if (document.getElementById("a63").checked) { a63 = 1; }
    if (document.getElementById("a73").checked) { a73 = 1; }
    if (document.getElementById("a83").checked) { a83 = 1; }
    if (document.getElementById("a93").checked) { a93 = 1; }
    if (document.getElementById("a103").checked) { a103 = 1; }

    document.getElementById("computacional").innerHTML = a13 + a23 + a33 + a43 + a53 + a63 + a73 + a83 + a93 + a103 +
        b31 + b32 + b33 + b34 + b35 + b36 + b37 + b38 + b39 + b310;

    let b41 = 0; let b42 = 0; let b43 = 0; let b44 = 0; let b45 = 0;    //fila 4b//
    let b46 = 0; let b47 = 0; let b48 = 0; let b49 = 0; let b410 = 0;


    let a14 = 0;
    let a24 = 0;
    let a34 = 0;
    let a44 = 0;
    let a54 = 0;    //columna 4a
    let a64 = 0;
    let a74 = 0;
    let a84 = 0;
    let a94 = 0;
    let a104 = 0;

    if (document.getElementById("b41").checked) { b41 = 1; }
    if (document.getElementById("b42").checked) { b42 = 1; }  //fila 4b//
    if (document.getElementById("b43").checked) { b43 = 1; }
    if (document.getElementById("b44").checked) { b44 = 1; }
    if (document.getElementById("b45").checked) { b45 = 1; }
    if (document.getElementById("b46").checked) { b46 = 1; }
    if (document.getElementById("b47").checked) { b47 = 1; }
    if (document.getElementById("b48").checked) { b48 = 1; }
    if (document.getElementById("b49").checked) { b49 = 1; }
    if (document.getElementById("b410").checked) { b410 = 1; }

    if (document.getElementById("a14").checked) { a14 = 1; }
    if (document.getElementById("a24").checked) { a24 = 1; }   //columna 4a
    if (document.getElementById("a34").checked) { a34 = 1; }
    if (document.getElementById("a44").checked) { a44 = 1; }
    if (document.getElementById("a54").checked) { a54 = 1; }
    if (document.getElementById("a64").checked) { a64 = 1; }
    if (document.getElementById("a74").checked) { a74 = 1; }
    if (document.getElementById("a84").checked) { a84 = 1; }
    if (document.getElementById("a94").checked) { a94 = 1; }
    if (document.getElementById("a104").checked) { a104 = 1; }

    document.getElementById("comercial").innerHTML = a14 + a24 + a34 + a44 + a54 + a64 + a74 + a84 + a94 + a104 +
        b41 + b42 + b43 + b44 + b45 + b46 + b47 + b48 + b49 + b410;

    let b51 = 0; let b52 = 0; let b53 = 0; let b54 = 0; let b55 = 0;    //fila 5b//
    let b56 = 0; let b57 = 0; let b58 = 0; let b59 = 0; let b510 = 0;


    let a15 = 0;
    let a25 = 0;
    let a35 = 0;
    let a45 = 0;
    let a55 = 0;    //columna 5a
    let a65 = 0;
    let a75 = 0;
    let a85 = 0;
    let a95 = 0;
    let a105 = 0;

    if (document.getElementById("b51").checked) { b51 = 1; }
    if (document.getElementById("b52").checked) { b52 = 1; }  //fila 5b//
    if (document.getElementById("b53").checked) { b53 = 1; }
    if (document.getElementById("b54").checked) { b54 = 1; }
    if (document.getElementById("b55").checked) { b55 = 1; }
    if (document.getElementById("b56").checked) { b56 = 1; }
    if (document.getElementById("b57").checked) { b57 = 1; }
    if (document.getElementById("b58").checked) { b58 = 1; }
    if (document.getElementById("b59").checked) { b59 = 1; }
    if (document.getElementById("b510").checked) { b510 = 1; }

    if (document.getElementById("a15").checked) { a15 = 1; }
    if (document.getElementById("a25").checked) { a25 = 1; }   //columna 5a
    if (document.getElementById("a35").checked) { a35 = 1; }
    if (document.getElementById("a45").checked) { a45 = 1; }
    if (document.getElementById("a55").checked) { a55 = 1; }
    if (document.getElementById("a65").checked) { a65 = 1; }
    if (document.getElementById("a75").checked) { a75 = 1; }
    if (document.getElementById("a85").checked) { a85 = 1; }
    if (document.getElementById("a95").checked) { a95 = 1; }
    if (document.getElementById("a105").checked) { a105 = 1; }

    document.getElementById("ejecutiva").innerHTML = a15 + a25 + a35 + a45 + a55 + a65 + a75 + a85 + a95 + a105 +
        b51 + b52 + b53 + b54 + b55 + b56 + b57 + b58 + b59 + b510;



    let b61 = 0; let b62 = 0; let b63 = 0; let b64 = 0; let b65 = 0;    //fila 6b//
    let b66 = 0; let b67 = 0; let b68 = 0; let b69 = 0; let b610 = 0;


    let a16 = 0;
    let a26 = 0;
    let a36 = 0;
    let a46 = 0;
    let a56 = 0;    //columna 6a
    let a66 = 0;
    let a76 = 0;
    let a86 = 0;
    let a96 = 0;
    let a106 = 0;

    if (document.getElementById("b61").checked) { b61 = 1; }
    if (document.getElementById("b62").checked) { b62 = 1; }  //fila 6b//
    if (document.getElementById("b63").checked) { b63 = 1; }
    if (document.getElementById("b64").checked) { b64 = 1; }
    if (document.getElementById("b65").checked) { b65 = 1; }
    if (document.getElementById("b66").checked) { b66 = 1; }
    if (document.getElementById("b67").checked) { b67 = 1; }
    if (document.getElementById("b68").checked) { b68 = 1; }
    if (document.getElementById("b69").checked) { b69 = 1; }
    if (document.getElementById("b610").checked) { b610 = 1; }

    if (document.getElementById("a16").checked) { a16 = 1; }
    if (document.getElementById("a26").checked) { a26 = 1; }   //columna 6a
    if (document.getElementById("a36").checked) { a36 = 1; }
    if (document.getElementById("a46").checked) { a46 = 1; }
    if (document.getElementById("a56").checked) { a56 = 1; }
    if (document.getElementById("a66").checked) { a66 = 1; }
    if (document.getElementById("a76").checked) { a76 = 1; }
    if (document.getElementById("a86").checked) { a86 = 1; }
    if (document.getElementById("a96").checked) { a96 = 1; }
    if (document.getElementById("a106").checked) { a106 = 1; }

    document.getElementById("persuasivo").innerHTML = a16 + a26 + a36 + a46 + a56 + a66 + a76 + a86 + a96 + a106 +
        b61 + b62 + b63 + b64 + b65 + b66 + b67 + b68 + b69 + b610;




    let b71 = 0; let b72 = 0; let b73 = 0; let b74 = 0; let b75 = 0;    //fila 7b//
    let b76 = 0; let b77 = 0; let b78 = 0; let b79 = 0; let b710 = 0;


    let a17 = 0;
    let a27 = 0;
    let a37 = 0;
    let a47 = 0;
    let a57 = 0;    //columna 7a
    let a67 = 0;
    let a77 = 0;
    let a87 = 0;
    let a97 = 0;
    let a107 = 0;

    if (document.getElementById("b71").checked) { b71 = 1; }
    if (document.getElementById("b72").checked) { b72 = 1; }  //fila 7b//
    if (document.getElementById("b73").checked) { b73 = 1; }
    if (document.getElementById("b74").checked) { b74 = 1; }
    if (document.getElementById("b75").checked) { b75 = 1; }
    if (document.getElementById("b76").checked) { b76 = 1; }
    if (document.getElementById("b77").checked) { b77 = 1; }
    if (document.getElementById("b78").checked) { b78 = 1; }
    if (document.getElementById("b79").checked) { b79 = 1; }
    if (document.getElementById("b710").checked) { b710 = 1; }

    if (document.getElementById("a17").checked) { a17 = 1; }
    if (document.getElementById("a27").checked) { a27 = 1; }   //columna 7a
    if (document.getElementById("a37").checked) { a37 = 1; }
    if (document.getElementById("a47").checked) { a47 = 1; }
    if (document.getElementById("a57").checked) { a57 = 1; }
    if (document.getElementById("a67").checked) { a67 = 1; }
    if (document.getElementById("a77").checked) { a77 = 1; }
    if (document.getElementById("a87").checked) { a87 = 1; }
    if (document.getElementById("a97").checked) { a97 = 1; }
    if (document.getElementById("a107").checked) { a107 = 1; }

    document.getElementById("linguistica").innerHTML = a17 + a27 + a37 + a47 + a57 + a67 + a77 + a87 + a97 + a107 +
        b71 + b72 + b13 + b74 + b75 + b76 + b77 + b78 + b79 + b710;





    let b81 = 0; let b82 = 0; let b83 = 0; let b84 = 0; let b85 = 0;    //fila 8b//
    let b86 = 0; let b87 = 0; let b88 = 0; let b89 = 0; let b810 = 0;


    let a18 = 0;
    let a28 = 0;
    let a38 = 0;
    let a48 = 0;
    let a58 = 0;    //columna 8a
    let a68 = 0;
    let a78 = 0;
    let a88 = 0;
    let a98 = 0;
    let a108 = 0;

    if (document.getElementById("b81").checked) { b81 = 1; }
    if (document.getElementById("b82").checked) { b82 = 1; }  //fila 8b//
    if (document.getElementById("b83").checked) { b83 = 1; }
    if (document.getElementById("b84").checked) { b84 = 1; }
    if (document.getElementById("b85").checked) { b85 = 1; }
    if (document.getElementById("b86").checked) { b86 = 1; }
    if (document.getElementById("b87").checked) { b87 = 1; }
    if (document.getElementById("b88").checked) { b88 = 1; }
    if (document.getElementById("b89").checked) { b89 = 1; }
    if (document.getElementById("b810").checked) { b810 = 1; }

    if (document.getElementById("a18").checked) { a18 = 1; }
    if (document.getElementById("a28").checked) { a28 = 1; }   //columna 8a
    if (document.getElementById("a38").checked) { a38 = 1; }
    if (document.getElementById("a48").checked) { a48 = 1; }
    if (document.getElementById("a58").checked) { a58 = 1; }
    if (document.getElementById("a68").checked) { a68 = 1; }
    if (document.getElementById("a78").checked) { a78 = 1; }
    if (document.getElementById("a88").checked) { a88 = 1; }
    if (document.getElementById("a98").checked) { a98 = 1; }
    if (document.getElementById("a108").checked) { a108 = 1; }

    document.getElementById("humanitaria").innerHTML = a18 + a28 + a38 + a48 + a58 + a68 + a78 + a88 + a98 + a108 +
        b81 + b82 + b83 + b84 + b85 + b86 + b87 + b88 + b89 + b810;







    let b91 = 0; let b92 = 0; let b93 = 0; let b94 = 0; let b95 = 0;    //fila 9b//
    let b96 = 0; let b97 = 0; let b98 = 0; let b99 = 0; let b910 = 0;


    let a19 = 0;
    let a29 = 0;
    let a39 = 0;
    let a49 = 0;
    let a59 = 0;    //columna 9a//
    let a69 = 0;
    let a79 = 0;
    let a89 = 0;
    let a99 = 0;
    let a109 = 0;

    if (document.getElementById("b91").checked) { b91 = 1; }
    if (document.getElementById("b92").checked) { b92 = 1; }  //fila 9b//
    if (document.getElementById("b93").checked) { b93 = 1; }
    if (document.getElementById("b94").checked) { b94 = 1; }
    if (document.getElementById("b95").checked) { b95 = 1; }
    if (document.getElementById("b96").checked) { b96 = 1; }
    if (document.getElementById("b97").checked) { b97 = 1; }
    if (document.getElementById("b98").checked) { b98 = 1; }
    if (document.getElementById("b99").checked) { b99 = 1; }
    if (document.getElementById("b910").checked) { b910 = 1; }

    if (document.getElementById("a19").checked) { a19 = 1; }
    if (document.getElementById("a29").checked) { a29 = 1; }   //columna 9a//
    if (document.getElementById("a39").checked) { a39 = 1; }
    if (document.getElementById("a49").checked) { a49 = 1; }
    if (document.getElementById("a59").checked) { a59 = 1; }
    if (document.getElementById("a69").checked) { a69 = 1; }
    if (document.getElementById("a79").checked) { a79 = 1; }
    if (document.getElementById("a89").checked) { a89 = 1; }
    if (document.getElementById("a99").checked) { a99 = 1; }
    if (document.getElementById("a109").checked) { a109 = 1; }

    document.getElementById("artistica").innerHTML = a19 + a29 + a39 + a49 + a59 + a69 + a79 + a89 + a99 + a109 +
        b91 + b92 + b93 + b94 + b95 + b96 + b97 + b98 + b99 + b910;





    let b101 = 0; let b102 = 0; let b103 = 0; let b104 = 0; let b105 = 0;    //fila 10b//
    let b106 = 0; let b107 = 0; let b108 = 0; let b109 = 0; let b1010 = 0;


    let a110 = 0;
    let a210 = 0;
    let a310 = 0;
    let a410 = 0;
    let a510 = 0;    //columna 10a
    let a610 = 0;
    let a710 = 0;
    let a810 = 0;
    let a910 = 0;
    let a1010 = 0;

    if (document.getElementById("b101").checked) { b101 = 1; }
    if (document.getElementById("b102").checked) { b102 = 1; }  //fila 10b//
    if (document.getElementById("b103").checked) { b103 = 1; }
    if (document.getElementById("b104").checked) { b104 = 1; }
    if (document.getElementById("b105").checked) { b105 = 1; }
    if (document.getElementById("b106").checked) { b106 = 1; }
    if (document.getElementById("b107").checked) { b107 = 1; }
    if (document.getElementById("b108").checked) { b108 = 1; }
    if (document.getElementById("b109").checked) { b109 = 1; }
    if (document.getElementById("b1010").checked) { b1010 = 1; }

    if (document.getElementById("a110").checked) { a110 = 1; }
    if (document.getElementById("a210").checked) { a210 = 1; }   //columna 10a
    if (document.getElementById("a310").checked) { a310 = 1; }
    if (document.getElementById("a410").checked) { a410 = 1; }
    if (document.getElementById("a510").checked) { a510 = 1; }
    if (document.getElementById("a610").checked) { a610 = 1; }
    if (document.getElementById("a710").checked) { a710 = 1; }
    if (document.getElementById("a810").checked) { a810 = 1; }
    if (document.getElementById("a910").checked) { a910 = 1; }
    if (document.getElementById("a1010").checked) { a1010 = 1; }

    document.getElementById("musical").innerHTML = a110 + a210 + a310 + a410 + a510 + a610 + a710 + a810 + a910 + a1010 +
        b101 + b102 + b103 + b104 + b105 + b106 + b107 + b108 + b109 + b1010;




}; //final de la funcion
