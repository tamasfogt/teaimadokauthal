<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>
<head>
<!--[if gte mso 12]>
> <style type="text/css">
> [a.btn {
	padding:15px 22px !important;
	display:inline-block !important;
}]
> </style>
> <![endif]-->
<title>teaimadok.hu</title>

</head>
<body bgcolor="lightgray">
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" class="full">
  <tr>
    <td height="54">&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="full">
  <tr>
    <td align="center"><table width="600" border="0" cellspacing="0" cellpadding="0" align="center" class="devicewidth">
        <tr>
          <td><table width="100%" bgcolor="#ffffff" border="0" cellspacing="0" cellpadding="0" align="center" class="full" style="background-color:#ffffff;">
              <tr>
                <td height="29">&nbsp;</td>
              </tr>
              <tr>
                <td><table border="0" cellspacing="0" cellpadding="0" align="left" class="inner" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                    <tr>
                      <td width="23" class="hide">&nbsp;</td>
                      <td height="75" class="inner" valign="middle"><a href="#"><img editable class="logo" src="http://test.teaimadok.hu/dist/images/logonew.png" width="120" height="70" label="Logo"></a></td>
                    </tr>
                  </table>
                  <table width="150" border="0" cellspacing="0" cellpadding="0" align="right" class="inner" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                    <tr>
                      <td height="15">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="center"><multiline><a href="http://teaimadok.hu" class="top-button" height="40" style="font:bold 13px/37px Arial, Helvetica, sans-serif; color:#000; text-decoration:none; text-transform:uppercase;">Irány az oldalra</a></multiline></td>
                      <td class="hide" width="20">&nbsp;</td>
                    </tr>
                    <tr>
                    <td height="30">&nbsp;</td>
                </tr>
                  </table></td>
              </tr>
                      <tr>
                        <td style="border-bottom:1px solid #dbdbdb;">&nbsp;</td>
                    </tr>  
            </table></td>
        </tr>

      </table></td>
  </tr>
</table>
<repeater>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="full">
  <tr>
    <td align="center"><table width="600" border="0" cellspacing="0" cellpadding="0" align="center" class="devicewidth">
        <tr>
          <td><table width="100%" bgcolor="#313131" border="0" cellspacing="0" cellpadding="0" align="center" class="full" >
              <tr>
                <td height="16">&nbsp;</td>
              </tr>
              <tr>
                <td align="center" style="font:700 27px 'Open Sans', Arial, Helvetica, sans-serif; color:#ffffff;" class="smallfont"><singleline>Sikeres rendelés</singleline></td>
              </tr>
            <tr>
                <td height="5"></td>
            </tr>            
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
</repeater>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="full" >
  <tr>
    <td  align="center"><table  style="padding-left:20px" width="600" border="0" cellspacing="0"  bgcolor="#ffffff" cellpadding="0" align="center" class="devicewidth">
        <tr>
            <td height="20"></td>
        </tr>   
        <tr>
          <td><table >
                    <tr>
                      <td align="center"><h3>Rendelt Termékek</h3></td>
                    </tr>
                    <tr>
                        <th align="center">Név</th>
                        <th align="center">Ár</th>
                        <th align="center">Mennyiség</th>
                    </tr>                
              @foreach ($order->orderedProducts as $product)
                        <tr>
                            <td align="center">{{ $product->name }}</td>
                            <td align="center">{{ $product->price }}</td>
                            <td align="center">{{ $product->quantity }}</td>    
                        </tr>
              @endforeach
            </table></td>
        </tr>
            <tr>
                <td height="3"><small>A szállítási költség 5000Ft alatti vásárlás esetén az árhoz hozzáadódik.</small></td>
            </tr>         
            <tr>
                <td height="20"></td>
            </tr>   
            <tr>
                <td ><h3>Fizetési és szállítási adatok</h3></td>
            </tr>
            <tr>
                <td height="20"></td>
            </tr>        
            <tr>
                <td >Név: {{$order->shipment->name}} </td>
            </tr> 
            <tr>
                <td height="5"></td>
            </tr>        
            <tr>
                <td >Cím:  {{$order->shipment->zipcode}} {{$order->shipment->city}} {{$order->shipment->address}} </td>
            </tr>
            <tr>
                <td height="5"></td>
            </tr>                
            <tr>
            <td >Telefonszám: {{$order->shipment->phone}}</td>
            </tr>                     
            <tr>
                <td height="20"></td>
            </tr>        
            <tr>
              <td><table >
                        <tr>
                          <td ></td>
                        </tr>
                </table></td>
            </tr> 
                <tr>
                    <td height="20"></td>
                </tr>          
            <tr>
                <td><h3>Fizetendő összeg: {{ $order->fullprice}}</h3></td>
            </tr>
            <tr>
                <td><h3>Az ár tartalmazza az ÁFÁ-t</p></td>
            </tr>        
                <tr>
                    <td height="5"></td>
                </tr>          
            <tr>
                <td>Üzenet a futárnak:</td>
            </tr>
            <tr>
                <td>{{ $order->message}}</td>
            </tr>
            <tr>
                <td height="30">&nbsp;</td>
            </tr>        
      </table></td>
  </tr>
</table>    
</body>
</html>