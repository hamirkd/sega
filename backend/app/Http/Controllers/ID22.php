<?php
header('Content-type: application/xml');
$filename = 'ID22.xml';
header('Content-Disposition: attachment; filename='.$filename);

function subArray($start,$nbr,$array){
  $array2 = [];
  if(!isset($array[$start])){
      return $array2;
  }
  $taille = count($array)<($start+$nbr)?count($array):($start+$nbr);
  for($i=$start;$i<$taille;$i++){
      $array2[] = $array[$i];
  }

  return $array2;
}
function sumArrayColumn($column,$array){
  $sum = 0;
    if(count($array)==0){
      return $sum;
    }
    foreach($array as $ar){
      $sum = $sum + $ar[$column];
    }
    return $sum;
}
?>
<?xml version="1.0"?>
<?mso-application progid="Excel.Sheet"?>
<Workbook xmlns="urn:schemas-microsoft-com:office:spreadsheet"
 xmlns:o="urn:schemas-microsoft-com:office:office"
 xmlns:x="urn:schemas-microsoft-com:office:excel"
 xmlns:ss="urn:schemas-microsoft-com:office:spreadsheet"
 xmlns:html="http://www.w3.org/TR/REC-html40">
 <DocumentProperties xmlns="urn:schemas-microsoft-com:office:office">
  <Author>MANAGER</Author>
  <LastAuthor>bg</LastAuthor>
  <LastPrinted>2021-10-18T11:25:29Z</LastPrinted>
  <Created>2020-01-05T14:14:43Z</Created>
  <LastSaved>2022-03-31T15:25:05Z</LastSaved>
  <Version>16.00</Version>
 </DocumentProperties>
 <OfficeDocumentSettings xmlns="urn:schemas-microsoft-com:office:office">
  <AllowPNG/>
 </OfficeDocumentSettings>
 <ExcelWorkbook xmlns="urn:schemas-microsoft-com:office:excel">
  <WindowHeight>9036</WindowHeight>
  <WindowWidth>23040</WindowWidth>
  <WindowTopX>32767</WindowTopX>
  <WindowTopY>32767</WindowTopY>
  <ProtectStructure>False</ProtectStructure>
  <ProtectWindows>False</ProtectWindows>
 </ExcelWorkbook>
 <Styles>
  <Style ss:ID="Default" ss:Name="Normal">
   <Alignment ss:Vertical="Bottom"/>
   <Borders/>
   <Font ss:FontName="Calibri" x:Family="Swiss" ss:Size="11" ss:Color="#000000"/>
   <Interior/>
   <NumberFormat/>
   <Protection/>
  </Style>
  <Style ss:ID="s62" ss:Name="Normal 4">
   <Alignment ss:Vertical="Bottom"/>
   <Borders/>
   <Font ss:FontName="Geneva"/>
   <Interior/>
   <NumberFormat/>
   <Protection/>
  </Style>
  <Style ss:ID="m1771927814064">
   <Alignment ss:Horizontal="Left" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Double" ss:Weight="3"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="11" ss:Color="#000000"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m1771927814084" ss:Parent="s62">
   <Alignment ss:Horizontal="Left" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="11"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m1771927814104" ss:Parent="s62">
   <Alignment ss:Horizontal="Left" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="11"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m1771927814144" ss:Parent="s62">
   <Alignment ss:Horizontal="Left" ss:Vertical="Bottom"/>
   <Borders>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="11" ss:Color="#33CCCC"
    ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="Short Date"/>
  </Style>
  <Style ss:ID="m1771927811360" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m1771927811380" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="#,##0"/>
  </Style>
  <Style ss:ID="m1771927811400" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m1771927811420" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m1771927814480" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m1771927814500" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="_-* #,##0\ _€_-;\-* #,##0\ _€_-;_-* &quot;-&quot;??\ _€_-;_-@_-"/>
  </Style>
  <Style ss:ID="m1771927814520" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="Short Date"/>
  </Style>
  <Style ss:ID="m1771927814540" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="_-* #,##0\ _€_-;\-* #,##0\ _€_-;_-* &quot;-&quot;??\ _€_-;_-@_-"/>
  </Style>
  <Style ss:ID="m1771927814560" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m1771927814580" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="_-* #,##0\ _€_-;\-* #,##0\ _€_-;_-* &quot;-&quot;??\ _€_-;_-@_-"/>
  </Style>
  <Style ss:ID="m1771927814600" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="Short Date"/>
  </Style>
  <Style ss:ID="m1771927814620" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="_-* #,##0\ _€_-;\-* #,##0\ _€_-;_-* &quot;-&quot;??\ _€_-;_-@_-"/>
  </Style>
  <Style ss:ID="m1771892272880" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m1771892272900" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="_-* #,##0\ _€_-;\-* #,##0\ _€_-;_-* &quot;-&quot;??\ _€_-;_-@_-"/>
  </Style>
  <Style ss:ID="m1771892272920" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="Short Date"/>
  </Style>
  <Style ss:ID="m1771892272940" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="_-* #,##0\ _€_-;\-* #,##0\ _€_-;_-* &quot;-&quot;??\ _€_-;_-@_-"/>
  </Style>
  <Style ss:ID="m1771892272960" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m1771892272980" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="_-* #,##0\ _€_-;\-* #,##0\ _€_-;_-* &quot;-&quot;??\ _€_-;_-@_-"/>
  </Style>
  <Style ss:ID="m1771892273000" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="Short Date"/>
  </Style>
  <Style ss:ID="m1771892273020" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="_-* #,##0\ _€_-;\-* #,##0\ _€_-;_-* &quot;-&quot;??\ _€_-;_-@_-"/>
  </Style>
  <Style ss:ID="m1771892275792" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m1771892275812" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="_-* #,##0\ _€_-;\-* #,##0\ _€_-;_-* &quot;-&quot;??\ _€_-;_-@_-"/>
  </Style>
  <Style ss:ID="m1771892275832" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="Short Date"/>
  </Style>
  <Style ss:ID="m1771892275852" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="_-* #,##0\ _€_-;\-* #,##0\ _€_-;_-* &quot;-&quot;??\ _€_-;_-@_-"/>
  </Style>
  <Style ss:ID="m1771892275872" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m1771892275892" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="_-* #,##0\ _€_-;\-* #,##0\ _€_-;_-* &quot;-&quot;??\ _€_-;_-@_-"/>
  </Style>
  <Style ss:ID="m1771892275912" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="Short Date"/>
  </Style>
  <Style ss:ID="m1771892275932" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="_-* #,##0\ _€_-;\-* #,##0\ _€_-;_-* &quot;-&quot;??\ _€_-;_-@_-"/>
  </Style>
  <Style ss:ID="m1771919231392" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m1771919231412" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="_-* #,##0\ _€_-;\-* #,##0\ _€_-;_-* &quot;-&quot;??\ _€_-;_-@_-"/>
  </Style>
  <Style ss:ID="m1771919231432" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="Short Date"/>
  </Style>
  <Style ss:ID="m1771919231452" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="_-* #,##0\ _€_-;\-* #,##0\ _€_-;_-* &quot;-&quot;??\ _€_-;_-@_-"/>
  </Style>
  <Style ss:ID="m1771919231472" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m1771919231492" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="_-* #,##0\ _€_-;\-* #,##0\ _€_-;_-* &quot;-&quot;??\ _€_-;_-@_-"/>
  </Style>
  <Style ss:ID="m1771919231512" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="Short Date"/>
  </Style>
  <Style ss:ID="m1771919231532" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="_-* #,##0\ _€_-;\-* #,##0\ _€_-;_-* &quot;-&quot;??\ _€_-;_-@_-"/>
  </Style>
  <Style ss:ID="m1771919231184" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m1771919231204" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="_-* #,##0\ _€_-;\-* #,##0\ _€_-;_-* &quot;-&quot;??\ _€_-;_-@_-"/>
  </Style>
  <Style ss:ID="m1771919231224" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="Short Date"/>
  </Style>
  <Style ss:ID="m1771919231244" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="_-* #,##0\ _€_-;\-* #,##0\ _€_-;_-* &quot;-&quot;??\ _€_-;_-@_-"/>
  </Style>
  <Style ss:ID="m1771919231264" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m1771919231284" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="_-* #,##0\ _€_-;\-* #,##0\ _€_-;_-* &quot;-&quot;??\ _€_-;_-@_-"/>
  </Style>
  <Style ss:ID="m1771919231304" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="Short Date"/>
  </Style>
  <Style ss:ID="m1771919231324" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="_-* #,##0\ _€_-;\-* #,##0\ _€_-;_-* &quot;-&quot;??\ _€_-;_-@_-"/>
  </Style>
  <Style ss:ID="m1771919230560" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m1771919230620" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m1771919230640" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m1771919230660" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="_-* #,##0\ _€_-;\-* #,##0\ _€_-;_-* &quot;-&quot;??\ _€_-;_-@_-"/>
  </Style>
  <Style ss:ID="m1771919230680" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="Short Date"/>
  </Style>
  <Style ss:ID="m1771919230700" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="_-* #,##0\ _€_-;\-* #,##0\ _€_-;_-* &quot;-&quot;??\ _€_-;_-@_-"/>
  </Style>
  <Style ss:ID="m1771919230996" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="15" ss:Color="#0066CC"
    ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="0"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="m1771919231036" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="2"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="14" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m1771919231056" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="2"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="12" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m1771919231076" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="12"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m1771919231096" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="12"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m1771919231116" ss:Parent="s62">
   <Alignment ss:Horizontal="Left" ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m1771919231156" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s63">
   <Borders/>
  </Style>
  <Style ss:ID="s65">
   <Font ss:FontName="Calibri" x:Family="Swiss" ss:Size="11" ss:Color="#000000"/>
   <Interior/>
  </Style>
  <Style ss:ID="s66">
   <Font ss:FontName="Calibri" x:Family="Swiss" ss:Size="11" ss:Color="#000000"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s68" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s69" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s71" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="14" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s73" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="16" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s74" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="18" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s75" ss:Parent="s62">
   <Alignment ss:Vertical="Bottom"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="12"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s76" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s77" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="12"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s78">
   <Alignment ss:Horizontal="Center" ss:Vertical="Bottom"/>
   <Font ss:FontName="Calibri" x:Family="Swiss" ss:Size="11" ss:Color="#000000"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s79" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="14" ss:Color="#0066CC"
    ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s80" ss:Parent="s62">
   <Alignment ss:Vertical="Bottom"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="11"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s81" ss:Parent="s62">
   <Alignment ss:Horizontal="Left" ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="16" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s82" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="14" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s83" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="14" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s86" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s88">
   <Borders/>
   <Font ss:FontName="Calibri" x:Family="Swiss" ss:Size="11" ss:Color="#000000"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s89" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s91" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s92" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s93" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s95" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="11"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s96" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="14"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s97" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="15"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s98" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="16" ss:Color="#0066CC"
    ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s99" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="12"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s101">
   <Alignment ss:Horizontal="Center" ss:Vertical="Bottom"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="11" ss:Color="#000000"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s108" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="15" ss:Color="#0066CC"
    ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s109" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s110" ss:Parent="s62">
   <Alignment ss:Horizontal="Right" ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s111" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s112">
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="12" ss:Color="#000000"
    ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s113" ss:Parent="s62">
   <Alignment ss:Horizontal="Left" ss:Vertical="Bottom"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="12" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s114" ss:Parent="s62">
   <Alignment ss:Horizontal="Right" ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="11" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s115" ss:Parent="s62">
   <Alignment ss:Horizontal="Right" ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="14"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s116" ss:Parent="s62">
   <Alignment ss:Horizontal="Right" ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="14" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s117" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="16" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="[$-40C]d\ mmmm\ yyyy;@"/>
   <Protection ss:Protected="0"/>
  </Style>
  <Style ss:ID="s118" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="16" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="[$-40C]d\ mmmm\ yyyy;@"/>
   <Protection ss:Protected="0"/>
  </Style>
  <Style ss:ID="s120" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"
    ss:ReadingOrder="RightToLeft" ss:VerticalText="1"/>
   <Borders>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="2"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s131" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="14" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s153" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="12"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s162" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s174" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s178" ss:Parent="s62">
   <Alignment ss:Horizontal="Left" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s183" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s185" ss:Parent="s62">
   <Alignment ss:Vertical="Center" ss:WrapText="1"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s186" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s191" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s192" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="_-* #,##0\ _€_-;\-* #,##0\ _€_-;_-* &quot;-&quot;??\ _€_-;_-@_-"/>
  </Style>
  <Style ss:ID="s193" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="Short Date"/>
  </Style>
  <Style ss:ID="s194" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="#,##0"/>
   <Protection ss:Protected="0"/>
  </Style>
  <Style ss:ID="s195">
   <Borders/>
   <Font ss:FontName="Calibri" x:Family="Swiss" ss:Size="11" ss:Color="#000000"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="#,##0"/>
  </Style>
  <Style ss:ID="s198" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s220" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="#,##0"/>
  </Style>
  <Style ss:ID="s238" ss:Parent="s62">
   <Alignment ss:Horizontal="Left" ss:Vertical="Bottom"/>
   <Borders>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="11" ss:Color="#33CCCC"
    ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s247" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="11"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s248" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="11"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s249" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="11"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s250">
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s251" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s252" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="#,##0"/>
   <Protection ss:Protected="0"/>
  </Style>
  <Style ss:ID="s253" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s254" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="2"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="#,##0"/>
  </Style>
  <Style ss:ID="s255" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="2"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="#,##0"/>
  </Style>
  <Style ss:ID="s256" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="2"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="#,##0"/>
  </Style>
  <Style ss:ID="s257">
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="2"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="2"/>
   </Borders>
   <Font ss:FontName="Calibri" x:Family="Swiss" ss:Size="11" ss:Color="#000000"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="#,##0"/>
  </Style>
 </Styles>
 <Worksheet ss:Name="ETATS ID22">
  <Table ss:ExpandedColumnCount="19" ss:ExpandedRowCount="72" x:FullColumns="1"
   x:FullRows="1" ss:DefaultColumnWidth="62.400000000000006"
   ss:DefaultRowHeight="14.55">
   <Column ss:AutoFitWidth="0" ss:Width="40.799999999999997"/>
   <Column ss:AutoFitWidth="0" ss:Width="39.6"/>
   <Column ss:AutoFitWidth="0" ss:Width="81"/>
   <Column ss:AutoFitWidth="0" ss:Width="72.599999999999994"/>
   <Column ss:Index="6" ss:AutoFitWidth="0" ss:Width="67.2"/>
   <Column ss:Index="8" ss:AutoFitWidth="0" ss:Width="66.600000000000009"/>
   <Column ss:Index="14" ss:AutoFitWidth="0" ss:Width="81"/>
   <Column ss:StyleID="s63" ss:AutoFitWidth="0" ss:Width="10.799999999999999"/>
   <Column ss:AutoFitWidth="0" ss:Width="52"/>
   <Column ss:AutoFitWidth="0" ss:Width="72"/>
   <Column ss:AutoFitWidth="0" ss:Width="72"/>
   <Column ss:AutoFitWidth="0" ss:Width="66"/>
   <Row ss:AutoFitHeight="0" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s68"/>
    <Cell ss:StyleID="s68"/>
    <Cell ss:StyleID="s68"/>
    <Cell ss:StyleID="s68"/>
    <Cell ss:StyleID="s68"/>
    <Cell ss:StyleID="s68"/>
    <Cell ss:StyleID="s68"/>
    <Cell ss:StyleID="s68"/>
    <Cell ss:StyleID="s68"/>
    <Cell ss:StyleID="s68"/>
    <Cell ss:StyleID="s68"/>
    <Cell ss:StyleID="s68"/>
    <Cell ss:StyleID="s68"/>
    <Cell ss:StyleID="s68"/>
    <Cell ss:StyleID="s68"/>
    <Cell ss:StyleID="s68"/>
    <Cell ss:StyleID="s69"><Data ss:Type="String">ID 22</Data></Cell>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="22.799999999999997" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:MergeAcross="3" ss:StyleID="s71"><Data ss:Type="String">REPUBLIQUE GABONAISE</Data></Cell>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s73"><Data ss:Type="String">  DECLARATION DES TRAITEMENTS, SALAIRES, PENSIONS VERSEES, ETC </Data></Cell>
    <Cell ss:StyleID="s74"/>
    <Cell ss:StyleID="s74"/>
    <Cell ss:StyleID="s74"/>
    <Cell ss:StyleID="s74"/>
    <Cell ss:StyleID="s74"/>
    <Cell ss:StyleID="s74"/>
    <Cell ss:StyleID="s74"/>
    <Cell ss:StyleID="s74"/>
    <Cell ss:StyleID="s74"/>
    <Cell ss:StyleID="s74"/>
    <Cell ss:StyleID="s75"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="17.55" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/>
    <Cell ss:MergeAcross="5" ss:StyleID="s71"><Data ss:Type="String">MINISTERE DE L'ECONOMIE, DU COMMERCE</Data></Cell>
    <Cell ss:StyleID="s76"/>
    <Cell ss:StyleID="s76"/>
    <Cell ss:StyleID="s76"/>
    <Cell ss:StyleID="s77"><Data ss:Type="String">Exercice ……</Data></Cell>
    <Cell ss:StyleID="s78"><Data ss:Type="Number"><?=$annee?></Data></Cell>
    <Cell ss:StyleID="s77"><Data ss:Type="String">(au titre duquel les retenues ont été effectuées)</Data></Cell>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s78"/>
    <Cell ss:StyleID="s80"><Data ss:Type="String">(art. 90 du CGI)</Data></Cell>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="21" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/>
    <Cell ss:MergeAcross="5" ss:StyleID="s71"><Data ss:Type="String">DE L'INDUSTRIE ET DU TOURISME</Data></Cell>
    <Cell ss:StyleID="s76"/>
    <Cell ss:StyleID="s76"/>
    <Cell ss:StyleID="s76"/>
    <Cell ss:StyleID="s81"><Data ss:Type="String">BORDEREAU RECAPITUTALIF</Data></Cell>
    <Cell ss:StyleID="s81"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s82"/>
    <Cell ss:StyleID="s82"/>
    <Cell ss:StyleID="s83"/>
    <Cell ss:StyleID="s83"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:MergeAcross="3" ss:StyleID="s86"><Data ss:Type="String" x:Ticked="1">&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;-</Data></Cell>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s88"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s89"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:MergeAcross="3" ss:StyleID="s91"><Data ss:Type="String">DIRECTION GENERALE DES IMPOTS</Data></Cell>
    <Cell ss:StyleID="s92"/>
    <Cell ss:StyleID="s92"/>
    <Cell ss:StyleID="s92"/>
    <Cell ss:StyleID="s93"/>
    <Cell ss:StyleID="s93"/>
    <Cell ss:StyleID="s93"/>
    <Cell ss:StyleID="s92"/>
    <Cell ss:StyleID="s92"/>
    <Cell ss:StyleID="s93"/>
    <Cell ss:StyleID="s92"/>
    <Cell ss:StyleID="s93"/>
    <Cell ss:StyleID="s93"/>
    <Cell ss:StyleID="s93"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="21" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:MergeAcross="3" ss:StyleID="s95"><Data ss:Type="String">BP 37 / 45 - Libreville</Data></Cell>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s96"><Data ss:Type="String">NOM DE L'ENTREPRISE OU RAISON SOCIALE : <?=$societe['raison_sociale'];?></Data></Cell>
    <Cell ss:StyleID="s97"/>
    <Cell ss:StyleID="s97"/>
    <Cell ss:StyleID="s97"/>
    <Cell ss:StyleID="s97"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s92"/>
    <Cell ss:StyleID="s98"/>
    <Cell ss:StyleID="s75"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s93"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="19.2" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:MergeAcross="3" ss:StyleID="s101"><Data ss:Type="String">Tel : 79.53.76/77</Data></Cell>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s82"><Data ss:Type="String">NIF  :</Data></Cell>
    <Cell ss:MergeAcross="1" ss:StyleID="m1771919230996"><Data ss:Type="String"><?= $societe['nif'];?></Data></Cell>
    <Cell ss:StyleID="s108"/>
    <Cell ss:StyleID="s108"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s92"/>
    <Cell ss:StyleID="s93"/>
    <Cell ss:StyleID="s92"/>
    <Cell ss:StyleID="s93"/>
    <Cell ss:StyleID="s93"/>
    <Cell ss:StyleID="s93"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s109"/>
    <Cell ss:StyleID="s92"/>
    <Cell ss:StyleID="s92"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s110"/>
    <Cell ss:StyleID="s111"/>
    <Cell ss:StyleID="s111"/>
    <Cell ss:StyleID="s92"/>
    <Cell ss:StyleID="s92"/>
    <Cell ss:StyleID="s93"/>
    <Cell ss:StyleID="s92"/>
    <Cell ss:StyleID="s110"/>
    <Cell ss:StyleID="s89"/>
    <Cell ss:StyleID="s93"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="15.45" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s109"/>
    <Cell ss:StyleID="s92"/>
    <Cell ss:StyleID="s92"/>
    <Cell ss:StyleID="s92"/>
    <Cell ss:StyleID="s92"/>
    <Cell ss:StyleID="s92"/>
    <Cell ss:StyleID="s92"/>
    <Cell ss:StyleID="s110"/>
    <Cell ss:StyleID="s111"/>
    <Cell ss:StyleID="s111"/>
    <Cell ss:StyleID="s92"/>
    <Cell ss:StyleID="s112"><Data ss:Type="String">Nombre de salariés : </Data></Cell>
    <Cell ss:StyleID="s93"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s113"><Data ss:Type="Number"><?= count($traitementsDasSalarie);?></Data></Cell>
    <Cell ss:StyleID="s89"/>
    <Cell ss:StyleID="s93"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="21" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s109"/>
    <Cell ss:StyleID="s114"/>
    <Cell ss:StyleID="s92"/>
    <Cell ss:StyleID="s92"/>
    <Cell ss:StyleID="s92"/>
    <Cell ss:StyleID="s112"><Data ss:Type="String">La présente déclaration est à déposer avant le 30 avril simultanément aux déclarations n° ID01 ou ID14 </Data></Cell>
    <Cell ss:StyleID="s96"/>
    <Cell ss:StyleID="s115"/>
    <Cell ss:StyleID="s116"/>
    <Cell ss:StyleID="s116"/>
    <Cell ss:StyleID="s117"/>
    <Cell ss:StyleID="s117"/>
    <Cell ss:StyleID="s118"/>
    <Cell ss:StyleID="s81"/>
    <Cell ss:StyleID="s110"/>
    <Cell ss:StyleID="s89"/>
    <Cell ss:StyleID="s93"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="15" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s88"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
    <Cell ss:StyleID="s66"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="33.75" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/>
    <Cell ss:MergeDown="3" ss:StyleID="s120"><Data ss:Type="String">EFFECTIF</Data></Cell>
    <Cell ss:MergeAcross="11" ss:StyleID="m1771919231036"><Data ss:Type="String">RECAPITULATION</Data></Cell>
    <Cell ss:StyleID="s131"/>
    <Cell ss:MergeAcross="3" ss:StyleID="m1771919231056"><Data ss:Type="String">RECAPITULATION DES RETENUES A LA SOURCE</Data></Cell>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="21" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/>
    <Cell ss:Index="3" ss:MergeAcross="5" ss:StyleID="m1771919231076"><Data
      ss:Type="String">SALAIRES VERSES</Data></Cell>
    <Cell ss:MergeAcross="5" ss:StyleID="m1771919231096"><Data ss:Type="String">RETENUES IMPÔTS</Data></Cell>
    <Cell ss:StyleID="s153"/>
    <Cell ss:MergeAcross="3" ss:StyleID="m1771919231116"><Data ss:Type="String">Recette des Impôts de ……………………………….</Data></Cell>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="29.25" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/>
    <Cell ss:Index="3" ss:MergeDown="1" ss:StyleID="s162"><Data ss:Type="String">      Salaire brut de présence        (1)&#10;&#10;</Data></Cell>
    <Cell ss:MergeAcross="1" ss:StyleID="m1771919231156"><Data ss:Type="String">Avantages en nature</Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="s162"><Data ss:Type="String">Indemnités imposables&#10;(4)</Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="s162"><Data ss:Type="String">Salaire brut congés&#10;(5)</Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="s162"><Data ss:Type="String">Total (1+2+3+4+5) (6)</Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="s162"><Data ss:Type="String">TCTS&#10;(7)</Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="s162"><Data ss:Type="String">IRPP&#10;(8)</Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="s162"><Data ss:Type="String">    FNH     (9)</Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230560"><Data ss:Type="String">      CFP        '(10)</Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="s178"><Data ss:Type="String">   Total          (7+8+9)          (11)</Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="s183"><Data ss:Type="String">Indemnités non imposables&#10;(12)</Data></Cell>
    <Cell ss:StyleID="s185"/>
    <Cell ss:StyleID="s186"><Data ss:Type="String">mois</Data></Cell>
    <Cell ss:StyleID="s174"><Data ss:Type="String">Montant des retenues (12)</Data></Cell>
    <Cell ss:MergeAcross="1" ss:StyleID="m1771919230620"><Data ss:Type="String">       Date et n° de           quittance</Data></Cell>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="36" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/>
    <Cell ss:Index="4" ss:StyleID="s191"><Data ss:Type="String">Logt, Eau, Elect …&#10;(2)</Data></Cell>
    <Cell ss:StyleID="s191"><Data ss:Type="String">Nourriture&#10;(3)</Data></Cell>
    <Cell ss:Index="15" ss:StyleID="s185"/>
    <Cell ss:StyleID="s186"><Data ss:Type="Number"><?= $dasQuittance[0]['mois']?></Data></Cell>
    <Cell ss:StyleID="s192"><Data ss:Type="Number"><?= $dasQuittance[0]['montant']?></Data></Cell>
    <Cell ss:StyleID="s193">
    <?php if($dasQuittance[0]['date_quittance']!=""){?>
      <Data ss:Type="DateTime"><?= date('Y-m-d',strtotime($dasQuittance[0]['date_quittance']))?></Data>
      <?php }?>
    </Cell>
    <Cell ss:StyleID="s192"><Data ss:Type="String"><?= $dasQuittance[0]['n_quittance']?></Data></Cell>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(0,36,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">1</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s195"/>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230640"><Data ss:Type="Number"><?= $dasQuittance[1]['mois']?></Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230660"><Data ss:Type="Number"><?= $dasQuittance[1]['montant']?></Data></Cell>
    
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230680">
      <?php if($dasQuittance[1]['date_quittance']!=""){?>
      <Data ss:Type="DateTime"><?= date('Y-m-d',strtotime($dasQuittance[1]['date_quittance']))?></Data>
      <?php }?>
    </Cell>
    
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230700"><Data ss:Type="String"><?= $dasQuittance[1]['n_quittance']?></Data></Cell>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">2</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s195"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36+49*1,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">3</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s88"/>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230640"><Data ss:Type="Number"><?= $dasQuittance[2]['mois']?></Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230660"><Data ss:Type="Number"><?= $dasQuittance[2]['montant']?></Data></Cell>

    <Cell ss:MergeDown="1" ss:StyleID="m1771919230680">
      <?php if($dasQuittance[2]['date_quittance']!=""){?>
      <Data ss:Type="DateTime"><?= date('Y-m-d',strtotime($dasQuittance[2]['date_quittance']))?></Data>
      <?php }?>
    </Cell>
        <Cell ss:MergeDown="1" ss:StyleID="m1771919230700"><Data ss:Type="String"><?= $dasQuittance[2]['n_quittance']?></Data></Cell>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36+49*2,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">4</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s88"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36+49*3,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">5</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s88"/>    
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230640"><Data ss:Type="Number"><?= $dasQuittance[3]['mois']?></Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230660"><Data ss:Type="Number"><?= $dasQuittance[3]['montant']?></Data></Cell>

    <Cell ss:MergeDown="1" ss:StyleID="m1771919230680">
      <?php if($dasQuittance[3]['date_quittance']!=""){?>
      <Data ss:Type="DateTime"><?= date('Y-m-d',strtotime($dasQuittance[3]['date_quittance']))?></Data>
      <?php }?>
    </Cell>
        <Cell ss:MergeDown="1" ss:StyleID="m1771919230700"><Data ss:Type="String"><?= $dasQuittance[3]['n_quittance']?></Data></Cell>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36+49*4,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">6</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s88"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36+49*5,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">7</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s88"/>
    
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230640"><Data ss:Type="Number"><?= $dasQuittance[4]['mois']?></Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230660"><Data ss:Type="Number"><?= $dasQuittance[4]['montant']?></Data></Cell>

    <Cell ss:MergeDown="1" ss:StyleID="m1771919230680">
      <?php if($dasQuittance[4]['date_quittance']!=""){?>
      <Data ss:Type="DateTime"><?= date('Y-m-d',strtotime($dasQuittance[4]['date_quittance']))?></Data>
      <?php }?>
    </Cell>
        <Cell ss:MergeDown="1" ss:StyleID="m1771919230700"><Data ss:Type="String"><?= $dasQuittance[4]['n_quittance']?></Data></Cell>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36+49*6,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">8</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s88"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36+49*7,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">9</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s88"/>
    
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230640"><Data ss:Type="Number"><?= $dasQuittance[5]['mois']?></Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230660"><Data ss:Type="Number"><?= $dasQuittance[5]['montant']?></Data></Cell>

    <Cell ss:MergeDown="1" ss:StyleID="m1771919230680">
      <?php if($dasQuittance[5]['date_quittance']!=""){?>
      <Data ss:Type="DateTime"><?= date('Y-m-d',strtotime($dasQuittance[5]['date_quittance']))?></Data>
      <?php }?>
    </Cell>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230700"><Data ss:Type="String"><?= $dasQuittance[5]['n_quittance']?></Data></Cell>
    
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36+49*8,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">10</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s88"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36+49*9,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">11</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s88"/>
    
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230640"><Data ss:Type="Number"><?= $dasQuittance[6]['mois']?></Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230660"><Data ss:Type="Number"><?= $dasQuittance[6]['montant']?></Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230680">
      <?php if($dasQuittance[6]['date_quittance']!=""){?>
      <Data ss:Type="DateTime"><?= date('Y-m-d',strtotime($dasQuittance[6]['date_quittance']))?></Data>
      <?php }?>
    </Cell>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230700"><Data ss:Type="String"><?= $dasQuittance[6]['n_quittance']?></Data></Cell>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36+49*10,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">12</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s88"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36+49*11,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">13</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s88"/>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230640"><Data ss:Type="Number"><?= $dasQuittance[7]['mois']?></Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230660"><Data ss:Type="Number"><?= $dasQuittance[7]['montant']?></Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230680">
      <?php if($dasQuittance[7]['date_quittance']!=""){?>
      <Data ss:Type="DateTime"><?= date('Y-m-d',strtotime($dasQuittance[7]['date_quittance']))?></Data>
      <?php }?>
    </Cell>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230700"><Data ss:Type="String"><?= $dasQuittance[7]['n_quittance']?></Data></Cell>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36+49*12,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">14</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s88"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36+49*13,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">15</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s88"/>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230640"><Data ss:Type="Number"><?= $dasQuittance[8]['mois']?></Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230660"><Data ss:Type="Number"><?= $dasQuittance[8]['montant']?></Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230680">
      <?php if($dasQuittance[8]['date_quittance']!=""){?>
      <Data ss:Type="DateTime"><?= date('Y-m-d',strtotime($dasQuittance[8]['date_quittance']))?></Data>
      <?php }?>
    </Cell>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230700"><Data ss:Type="String"><?= $dasQuittance[8]['n_quittance']?></Data></Cell>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36+49*14,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">16</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s88"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36+49*15,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">17</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s88"/>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230640"><Data ss:Type="Number"><?= $dasQuittance[9]['mois']?></Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230660"><Data ss:Type="Number"><?= $dasQuittance[9]['montant']?></Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230680">
      <?php if($dasQuittance[9]['date_quittance']!=""){?>
      <Data ss:Type="DateTime"><?= date('Y-m-d',strtotime($dasQuittance[9]['date_quittance']))?></Data>
      <?php }?>
    </Cell>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230700"><Data ss:Type="String"><?= $dasQuittance[9]['n_quittance']?></Data></Cell>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36+49*16,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">18</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s88"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36+49*17,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">19</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s88"/>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230640"><Data ss:Type="Number"><?= $dasQuittance[10]['mois']?></Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230660"><Data ss:Type="Number"><?= $dasQuittance[10]['montant']?></Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230680">
      <?php if($dasQuittance[10]['date_quittance']!=""){?>
      <Data ss:Type="DateTime"><?= date('Y-m-d',strtotime($dasQuittance[10]['date_quittance']))?></Data>
      <?php }?>
    </Cell>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230700"><Data ss:Type="String"><?= $dasQuittance[10]['n_quittance']?></Data></Cell>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36+49*18,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">20</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s88"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36+49*19,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">21</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s88"/>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230640"><Data ss:Type="Number"><?= $dasQuittance[11]['mois']?></Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230660"><Data ss:Type="Number"><?= $dasQuittance[11]['montant']?></Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230680">
      <?php if($dasQuittance[11]['date_quittance']!=""){?>
      <Data ss:Type="DateTime"><?= date('Y-m-d',strtotime($dasQuittance[11]['date_quittance']))?></Data>
      <?php }?>
    </Cell>
    <Cell ss:MergeDown="1" ss:StyleID="m1771919230700"><Data ss:Type="String"><?= $dasQuittance[11]['n_quittance']?></Data></Cell>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36+49*20,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">22</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s88"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="15" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36+49*21,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">23</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s88"/>
    <Cell ss:MergeDown="1" ss:StyleID="m1771927811360"><Data ss:Type="String">REG</Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="m1771927811380"
     ss:Formula="=R[2]C-SUM(R[-23]C:R[-1]C)"><Data ss:Type="Number">0</Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="m1771927811400"/>
    <Cell ss:MergeDown="1" ss:StyleID="m1771927811420"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36+49*22,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">24</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s88"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="15" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36+49*23,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">25</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s88"/>
    <Cell ss:MergeDown="1" ss:StyleID="s198"><Data ss:Type="String">TOTAL</Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="s220" ss:Formula="=R[6]C[-4]"><Data
      ss:Type="Number">11</Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="s162"/>
    <Cell ss:MergeDown="1" ss:StyleID="s183"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="18" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36+49*24,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">26</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s88"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="18" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36+49*25,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">27</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s88"/>
    <Cell ss:MergeAcross="3" ss:StyleID="m1771927814064"><Data ss:Type="String">Le total des versements (col.12) doit être</Data></Cell>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="18" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36+49*26,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">28</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s88"/>
    <Cell ss:MergeAcross="3" ss:StyleID="m1771927814084"><Data ss:Type="String">égal à celui des retenues (col.10). A défaut,</Data></Cell>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="15.75" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36+49*27,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">29</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s88"/>
    <Cell ss:MergeAcross="3" ss:StyleID="m1771927814104"><Data ss:Type="String">produire une note expplicative.</Data></Cell>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="18" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php $data = subArray(36+49*28,49,$traitementsDasSalarie);?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">30</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s88"/>
    <Cell ss:MergeAcross="3" ss:StyleID="s238"><Data ss:Type="String"><?=$societe['ville'].' le '.date('d/m/Y')?></Data></Cell>
   </Row>
   <?php 
   $nbligne = intval(count($traitementsDasSalarie)/49)+1;
   if($nbligne>=31){
   ?>
   <Row ss:AutoFitHeight="0" ss:Height="15" ss:StyleID="s65">
    <Cell ss:StyleID="s66"/> <?php 
    $data = subArray(36+49*29,49,$traitementsDasSalarie);
    ?>
    <Cell ss:StyleID="s186"><Data ss:Type="Number">31</Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('salaire_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('avlog',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('av_nour',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('prim_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('brut_conge',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total_brut',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('tcs',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('irpp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('fnh',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('cfp',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('total',$data)?></Data></Cell>
    <Cell ss:StyleID="s194"><Data ss:Type="Number"><?= sumArrayColumn('primes_non_impo',$data)?></Data></Cell>
    <Cell ss:StyleID="s195"/>
    <Cell ss:StyleID="s247"><Data ss:Type="String">Cachet et signature de l'employeur</Data></Cell>
    <Cell ss:StyleID="s248"/>
    <Cell ss:StyleID="s248"/>
    <Cell ss:StyleID="s249"/>
   </Row>
     <?php }
    else {
     ?>
   <Row ss:AutoFitHeight="0">
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s254"><Data ss:Type="String">TOTAUX</Data></Cell>
    <Cell ss:StyleID="s255" ss:Formula="=SUM(R[-30]C:R[-1]C)"><Data
      ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s256" ss:Formula="=SUM(R[-30]C:R[-1]C)"><Data
      ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s256" ss:Formula="=SUM(R[-30]C:R[-1]C)"><Data
      ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s256" ss:Formula="=SUM(R[-30]C:R[-1]C)"><Data
      ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s256" ss:Formula="=SUM(R[-30]C:R[-1]C)"><Data
      ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s256" ss:Formula="=SUM(R[-30]C:R[-1]C)"><Data
      ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s256" ss:Formula="=SUM(R[-30]C:R[-1]C)"><Data
      ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s256" ss:Formula="=SUM(R[-30]C:R[-1]C)"><Data
      ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s256" ss:Formula="=SUM(R[-30]C:R[-1]C)"><Data
      ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s256" ss:Formula="=SUM(R[-30]C:R[-1]C)"><Data
      ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s256" ss:Formula="=SUM(R[-30]C:R[-1]C)"><Data
      ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s257" ss:Formula="=SUM(R[-30]C:R[-1]C)"><Data
      ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s195"/>
    <Cell ss:StyleID="s247"><Data ss:Type="String">Cachet et signature de l'employeur</Data></Cell>
    <Cell ss:StyleID="s248"/>
    <Cell ss:StyleID="s248"/>
    <Cell ss:StyleID="s249"/>
   </Row>
   <?php 
    }

    for($i=32;$i<$nbligne;$i++){
   ?>
   <Row ss:AutoFitHeight="0">
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s251"><Data ss:Type="Number">9</Data></Cell>
    <Cell ss:StyleID="s252"><Data ss:Type="Number">1</Data></Cell>
    <Cell ss:StyleID="s252"><Data ss:Type="Number">2</Data></Cell>
    <Cell ss:StyleID="s252"><Data ss:Type="Number">3</Data></Cell>
    <Cell ss:StyleID="s252"><Data ss:Type="Number">4</Data></Cell>
    <Cell ss:StyleID="s252"><Data ss:Type="Number">5</Data></Cell>
    <Cell ss:StyleID="s252"><Data ss:Type="Number">6</Data></Cell>
    <Cell ss:StyleID="s252"><Data ss:Type="Number">7</Data></Cell>
    <Cell ss:StyleID="s252"><Data ss:Type="Number">8</Data></Cell>
    <Cell ss:StyleID="s252"><Data ss:Type="Number">9</Data></Cell>
    <Cell ss:StyleID="s252"><Data ss:Type="Number">10</Data></Cell>
    <Cell ss:StyleID="s252"><Data ss:Type="Number">11</Data></Cell>
    <Cell ss:StyleID="s252"><Data ss:Type="Number">12</Data></Cell>
   </Row>
   <?php } 
   
   if($nbligne>=32){
   ?>

  
   <Row ss:AutoFitHeight="0">
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s254"><Data ss:Type="String">TOTAUX</Data></Cell>
    <Cell ss:StyleID="s255" ss:Formula="=SUM(R[-30]C:R[-2]C)"><Data
      ss:Type="Number">29</Data></Cell>
    <Cell ss:StyleID="s256" ss:Formula="=SUM(R[-30]C:R[-2]C)"><Data
      ss:Type="Number">58</Data></Cell>
    <Cell ss:StyleID="s256" ss:Formula="=SUM(R[-30]C:R[-2]C)"><Data
      ss:Type="Number">87</Data></Cell>
    <Cell ss:StyleID="s256" ss:Formula="=SUM(R[-30]C:R[-2]C)"><Data
      ss:Type="Number">116</Data></Cell>
    <Cell ss:StyleID="s256" ss:Formula="=SUM(R[-30]C:R[-2]C)"><Data
      ss:Type="Number">145</Data></Cell>
    <Cell ss:StyleID="s256" ss:Formula="=SUM(R[-30]C:R[-2]C)"><Data
      ss:Type="Number">174</Data></Cell>
    <Cell ss:StyleID="s256" ss:Formula="=SUM(R[-30]C:R[-2]C)"><Data
      ss:Type="Number">203</Data></Cell>
    <Cell ss:StyleID="s256" ss:Formula="=SUM(R[-30]C:R[-2]C)"><Data
      ss:Type="Number">232</Data></Cell>
    <Cell ss:StyleID="s256" ss:Formula="=SUM(R[-30]C:R[-2]C)"><Data
      ss:Type="Number">261</Data></Cell>
    <Cell ss:StyleID="s256"/>
    <Cell ss:StyleID="s256" ss:Formula="=SUM(R[-30]C:R[-2]C)"><Data
      ss:Type="Number">319</Data></Cell>
    <Cell ss:StyleID="s257" ss:Formula="=SUM(R[-30]C:R[-2]C)"><Data
      ss:Type="Number">348</Data></Cell>
   </Row>
   <?php }?>
   <Row ss:AutoFitHeight="0">
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s250"/>
   </Row>
   <Row ss:AutoFitHeight="0">
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s250"/>
    <Cell ss:StyleID="s250"/>
   </Row>
  </Table>
  <WorksheetOptions xmlns="urn:schemas-microsoft-com:office:excel">
   <PageSetup>
    <Layout x:Orientation="Landscape"/>
    <Header x:Margin="0.3"/>
    <Footer x:Margin="0.3"/>
    <PageMargins x:Bottom="0.75" x:Left="0.7" x:Right="0.7" x:Top="0.75"/>
   </PageSetup>
   <Unsynced/>
   <FitToPage/>
   <Print>
    <FitHeight>0</FitHeight>
    <ValidPrinterInfo/>
    <PaperSizeIndex>9</PaperSizeIndex>
    <Scale>61</Scale>
    <HorizontalResolution>600</HorizontalResolution>
    <VerticalResolution>600</VerticalResolution>
   </Print>
   <Zoom>94</Zoom>
   <Selected/>
   <TopRowVisible>3</TopRowVisible>
   <Panes>
    <Pane>
     <Number>3</Number>
     <ActiveRow>59</ActiveRow>
     <ActiveCol>6</ActiveCol>
    </Pane>
   </Panes>
   <ProtectObjects>False</ProtectObjects>
   <ProtectScenarios>False</ProtectScenarios>
  </WorksheetOptions>
 </Worksheet>
</Workbook>