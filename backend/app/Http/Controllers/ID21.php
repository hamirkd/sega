<?php
header('Content-type: application/xml');
$filename = 'ID21.xml';
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
$nbpage = intval(count($traitementsDasSalarie)/49)+1;
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
  <LastPrinted>2022-04-03T15:33:51Z</LastPrinted>
  <Created>2020-01-05T14:14:43Z</Created>
  <LastSaved>2022-04-03T15:48:47Z</LastSaved>
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
  <Style ss:ID="m2884566115372" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Top" ss:VerticalText="1"/>
   <Borders>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m2884566115392" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Top" ss:VerticalText="1"
    ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m2884566114896" ss:Parent="s62">
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
  <Style ss:ID="m2884566114688" ss:Parent="s62">
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
  <Style ss:ID="m2884566114708" ss:Parent="s62">
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
  <Style ss:ID="m2884566114728" ss:Parent="s62">
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
  <Style ss:ID="m2884566114748" ss:Parent="s62">
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
  <Style ss:ID="m2884566114332" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Top" ss:VerticalText="1"/>
   <Borders>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m2884566114352" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Top" ss:VerticalText="1"
    ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m2884566114480" ss:Parent="s62">
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
  <Style ss:ID="m2884566117520" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Top" ss:VerticalText="1"
    ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m2884566117640" ss:Parent="s62">
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
  <Style ss:ID="m2884566117660" ss:Parent="s62">
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
  <Style ss:ID="m2884566117680" ss:Parent="s62">
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
  <Style ss:ID="m2884566117700" ss:Parent="s62">
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
  <Style ss:ID="m2884566117492" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Top" ss:VerticalText="1"/>
   <Borders>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="m2884566117936" ss:Parent="s62">
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
  <Style ss:ID="m2884566117956" ss:Parent="s62">
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
  <Style ss:ID="m2884566118056" ss:Parent="s62">
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
  <Style ss:ID="m2884566117184" ss:Parent="s62">
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
  <Style ss:ID="m2884566117204" ss:Parent="s62">
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
  <Style ss:ID="m2884566117224" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="15" ss:Color="#0066CC"
    ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s63">
   <Interior/>
  </Style>
  <Style ss:ID="s64">
   <Font ss:FontName="Calibri" x:Family="Swiss" ss:Size="11" ss:Color="#000000"/>
   <Interior/>
  </Style>
  <Style ss:ID="s65">
   <Font ss:FontName="Calibri" x:Family="Swiss" ss:Size="12" ss:Color="#000000"
    ss:Bold="1"/>
   <Interior/>
  </Style>
  <Style ss:ID="s66">
   <Font ss:FontName="Calibri" x:Family="Swiss" ss:Size="11" ss:Color="#000000"
    ss:Bold="1"/>
   <Interior/>
  </Style>
  <Style ss:ID="s67">
   <Font ss:FontName="Calibri" x:Family="Swiss" ss:Size="11" ss:Color="#000000"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s69" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s70" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Color="#FFFFFF"/>
   <Interior/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s72" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="14" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s74" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="14" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s75" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="20" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s76" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="18" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s77" ss:Parent="s62">
   <Alignment ss:Vertical="Bottom"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="11"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s78" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="16" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s79" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s80" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Color="#FFFFFF"/>
   <Interior/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s81" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s82" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="14"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s83" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="14" ss:Color="#0066CC"
    ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s84">
   <Alignment ss:Horizontal="Center" ss:Vertical="Bottom"/>
   <Font ss:FontName="Calibri" x:Family="Swiss" ss:Size="11" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s85">
   <Alignment ss:Horizontal="Center" ss:Vertical="Bottom"/>
   <Font ss:FontName="Calibri" x:Family="Swiss" ss:Size="11" ss:Color="#000000"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s86" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s87" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s88" ss:Parent="s62">
   <Alignment ss:Horizontal="Left" ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="16" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s89" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="14" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s90" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="16" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s91" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="16" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s92" ss:Parent="s62">
   <Alignment ss:Vertical="Bottom"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s96" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s98" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s99" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s100" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s101" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s103" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="11"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s104" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="15" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s105">
   <Font ss:FontName="Calibri" x:Family="Swiss" ss:Size="15" ss:Color="#000000"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s106" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="15"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s107" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="15"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s108">
   <Font ss:FontName="Calibri" x:Family="Swiss" ss:Size="13" ss:Color="#000000"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s109" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="16" ss:Color="#0066CC"
    ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s110" ss:Parent="s62">
   <Alignment ss:Vertical="Bottom"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="12"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s111" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="12"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s113">
   <Alignment ss:Horizontal="Center" ss:Vertical="Bottom"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="11" ss:Color="#000000"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s115" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="15" ss:Color="#0066CC"
    ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s116" ss:Parent="s62">
   <Alignment ss:Horizontal="Right" ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s117" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s118" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s119">
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="7" ss:Color="#000000"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s120" ss:Parent="s62">
   <Alignment ss:Horizontal="Right" ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="11" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s122" ss:Parent="s62">
   <Alignment ss:Horizontal="Left" ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="11" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s123">
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="14" ss:Color="#000000"
    ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s124">
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="14" ss:Color="#000000"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s125" ss:Parent="s62">
   <Alignment ss:Horizontal="Right" ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="14"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s126" ss:Parent="s62">
   <Alignment ss:Horizontal="Right" ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="14" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s127" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="16" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="[$-40C]d\ mmmm\ yyyy;@"/>
   <Protection ss:Protected="0"/>
  </Style>
  <Style ss:ID="s129" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s134" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s139" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s162" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s163" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s164" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s166" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Top" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s172" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Top" ss:VerticalText="1"/>
   <Borders>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s177" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Top" ss:VerticalText="1"
    ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s181" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Top"/>
   <Borders>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="11"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s188" ss:Parent="s62">
   <Alignment ss:Vertical="Top" ss:VerticalText="1"/>
   <Borders>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s189">
   <Font ss:FontName="Calibri" x:Family="Swiss" ss:Size="9" ss:Color="#000000"/>
   <Interior/>
  </Style>
  <Style ss:ID="s190">
   <Font ss:FontName="Calibri" x:Family="Swiss" ss:Size="9" ss:Color="#000000"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s191" ss:Parent="s62">
   <Alignment ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s192" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s193" ss:Parent="s62">
   <Alignment ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s194" ss:Parent="s62">
   <Alignment ss:Vertical="Top" ss:VerticalText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s195" ss:Parent="s62">
   <Alignment ss:Vertical="Top" ss:VerticalText="1" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s197" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s199" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s200" ss:Parent="s62">
   <Alignment ss:Vertical="Top" ss:VerticalText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s201" ss:Parent="s62">
   <Alignment ss:Vertical="Top" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s202" ss:Parent="s62">
   <Alignment ss:Vertical="Top" ss:VerticalText="1" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s204" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s206" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s207" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection ss:Protected="0"/>
  </Style>
  <Style ss:ID="s208" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s209" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s210" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s211" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="#,##0"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s212">
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Calibri" x:Family="Swiss" ss:Size="11" ss:Color="#33CCCC"/>
   <Interior/>
   <NumberFormat ss:Format="#,##0"/>
  </Style>
  <Style ss:ID="s213" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s214" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection ss:Protected="0"/>
  </Style>
  <Style ss:ID="s215" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior/>
   <Protection ss:Protected="0"/>
  </Style>
  <Style ss:ID="s216" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection ss:Protected="0"/>
  </Style>
  <Style ss:ID="s217" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection ss:Protected="0"/>
  </Style>
  <Style ss:ID="s218" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="#,##0"/>
  </Style>
  <Style ss:ID="s219">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Calibri" x:Family="Swiss" ss:Size="11"/>
   <Interior/>
   <NumberFormat ss:Format="#,##0"/>
  </Style>
  <Style ss:ID="s220" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="#,##0"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s221" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="#,##0"/>
  </Style>
  <Style ss:ID="s222" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s223" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection ss:Protected="0"/>
  </Style>
  <Style ss:ID="s224" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection ss:Protected="0"/>
  </Style>
  <Style ss:ID="s225" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="#,##0"/>
  </Style>
  <Style ss:ID="s226" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s227" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s228" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="#,##0"/>
  </Style>
  <Style ss:ID="s229">
   <Font ss:FontName="Calibri" x:Family="Swiss" ss:Size="11" ss:Color="#000000"
    ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s231" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Top" ss:WrapText="1"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s232">
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Calibri" x:Family="Swiss" ss:Size="11" ss:Color="#33CCCC"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="#,##0"/>
  </Style>
  <Style ss:ID="s233" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection ss:Protected="0"/>
  </Style>
  <Style ss:ID="s234" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection ss:Protected="0"/>
  </Style>
  <Style ss:ID="s235" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s236" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s237" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s238" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="#,##0"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s239" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <NumberFormat ss:Format="#,##0"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s240" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
  </Style>
  <Style ss:ID="s241" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection ss:Protected="0"/>
  </Style>
  <Style ss:ID="s242" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection ss:Protected="0"/>
  </Style>
  <Style ss:ID="s243" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection ss:Protected="0"/>
  </Style>
  <Style ss:ID="s244" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Bold="1"/>
   <Interior ss:Color="#FFFFFF" ss:Pattern="Solid"/>
   <Protection ss:Protected="0"/>
  </Style>
  <Style ss:ID="s245" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior/>
  </Style>
  <Style ss:ID="s246" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior/>
  </Style>
  <Style ss:ID="s247" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior/>
  </Style>
  <Style ss:ID="s248">
   <Alignment ss:Vertical="Center" ss:WrapText="1"/>
   <Borders/>
   <Font ss:FontName="Helvetica-Bold" ss:Size="8" ss:Color="#000000" ss:Bold="1"/>
   <Interior/>
  </Style>
  <Style ss:ID="s249" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss"/>
   <Interior/>
   <NumberFormat ss:Format="#,##0"/>
  </Style>
  <Style ss:ID="s250" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior/>
   <Protection ss:Protected="0"/>
  </Style>
  <Style ss:ID="s251" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior/>
   <NumberFormat ss:Format="#,##0"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s252" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior/>
   <Protection ss:Protected="0"/>
  </Style>
  <Style ss:ID="s253" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior/>
   <Protection ss:Protected="0"/>
  </Style>
  <Style ss:ID="s254" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s255" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s256" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s257" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior/>
   <NumberFormat ss:Format="#,##0"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s258" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior/>
   <NumberFormat ss:Format="#,##0"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s259" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior/>
   <NumberFormat ss:Format="#,##0"/>
   <Protection x:HideFormula="1"/>
  </Style>
  <Style ss:ID="s260" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior/>
  </Style>
  <Style ss:ID="s261" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior/>
   <Protection ss:Protected="0"/>
  </Style>
  <Style ss:ID="s262" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior/>
   <Protection ss:Protected="0"/>
  </Style>
  <Style ss:ID="s263" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9" ss:Bold="1"/>
   <Interior/>
   <Protection ss:Protected="0"/>
  </Style>
  <Style ss:ID="s264" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Bottom" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Left" ss:LineStyle="Continuous" ss:Weight="1"/>
    <Border ss:Position="Right" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior/>
   <NumberFormat ss:Format="#,##0"/>
  </Style>
  <Style ss:ID="s265" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior/>
   <NumberFormat ss:Format="#,##0"/>
  </Style>
  <Style ss:ID="s266" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior/>
  </Style>
  <Style ss:ID="s267" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Bold="1"/>
   <Interior/>
   <Protection ss:Protected="0"/>
  </Style>
  <Style ss:ID="s268" ss:Parent="s62">
   <Alignment ss:Vertical="Center"/>
   <Borders>
    <Border ss:Position="Top" ss:LineStyle="Continuous" ss:Weight="1"/>
   </Borders>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Bold="1"/>
   <Interior/>
   <Protection ss:Protected="0"/>
  </Style>
  <Style ss:ID="s269" ss:Parent="s62">
   <Alignment ss:Horizontal="Center" ss:Vertical="Center"/>
   <Borders/>
   <Font ss:FontName="Arial" x:Family="Swiss" ss:Size="9"/>
   <Interior/>
   <NumberFormat ss:Format="#,##0"/>
  </Style>
 </Styles>
 <Worksheet ss:Name="ETAT ID21">
  <Table ss:ExpandedColumnCount="30" ss:ExpandedRowCount="<?=$nbpage*100?>" x:FullColumns="1"
   x:FullRows="1" ss:StyleID="s63" ss:DefaultColumnWidth="61.8"
   ss:DefaultRowHeight="14.55">
   <Column ss:StyleID="s63" ss:AutoFitWidth="0" ss:Width="46.800000000000004"/>
   <Column ss:StyleID="s63" ss:AutoFitWidth="0" ss:Width="26.4"/>
   <Column ss:StyleID="s63" ss:AutoFitWidth="0" ss:Width="51.6"/>
   <Column ss:StyleID="s63" ss:AutoFitWidth="0" ss:Width="262.8"/>
   <Column ss:StyleID="s63" ss:AutoFitWidth="0" ss:Width="25.2" ss:Span="1"/>
   <Column ss:Index="7" ss:StyleID="s63" ss:AutoFitWidth="0" ss:Width="27"/>
   <Column ss:StyleID="s63" ss:AutoFitWidth="0" ss:Width="25.2" ss:Span="7"/>
   <Column ss:Index="16" ss:StyleID="s63" ss:AutoFitWidth="0"
    ss:Width="68.399999999999991" ss:Span="11"/>
   <Row ss:AutoFitHeight="0"/>
   <Row ss:AutoFitHeight="0" ss:Height="15.45" ss:StyleID="s64">
    <Cell ss:Index="3" ss:StyleID="s65"><Data ss:Type="String">ID21: BORDEREAU DÉTAILLÉ DES SALAIRES VERSÉS PAR EMPLOYÉS </Data></Cell>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:Index="3" ss:StyleID="s66"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:Index="3"><Data ss:Type="String">Page 1</Data></Cell>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s70"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="24.450000000000003" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:MergeAcross="2" ss:StyleID="s72"><Data ss:Type="String">REPUBLIQUE GABONAISE</Data></Cell>
    <Cell ss:StyleID="s74"/>
    <Cell ss:StyleID="s74"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s75"><Data ss:Type="String">  DECLARATION DES TRAITEMENTS, SALAIRES, PENSIONS VERSEES, ETC … </Data></Cell>
    <Cell ss:StyleID="s76"/>
    <Cell ss:StyleID="s76"/>
    <Cell ss:StyleID="s76"/>
    <Cell ss:StyleID="s76"/>
    <Cell ss:StyleID="s76"/>
    <Cell ss:StyleID="s76"/>
    <Cell ss:StyleID="s76"/>
    <Cell ss:StyleID="s76"/>
    <Cell ss:StyleID="s76"/>
    <Cell ss:StyleID="s76"/>
    <Cell ss:StyleID="s76"/>
    <Cell ss:StyleID="s76"/>
    <Cell ss:StyleID="s76"/>
    <Cell ss:StyleID="s76"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s77"><Data ss:Type="String">(art. 90 du CGI)</Data></Cell>
    <Cell ss:Index="27" ss:StyleID="s67"/>
    <Cell ss:StyleID="s78"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s80"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="17.55" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:MergeAcross="2" ss:StyleID="s72"><Data ss:Type="String">MINISTERE DE L'ECONOMIE, DU COMMERCE</Data></Cell>
    <Cell ss:StyleID="s74"/>
    <Cell ss:StyleID="s74"/>
    <Cell ss:StyleID="s81"/>
    <Cell ss:StyleID="s81"/>
    <Cell ss:StyleID="s81"/>
    <Cell ss:StyleID="s81"/>
    <Cell ss:StyleID="s81"/>
    <Cell ss:StyleID="s81"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s82"><Data ss:Type="String">Exercice ……</Data></Cell>
    <Cell ss:StyleID="s83"/>
    <Cell ss:StyleID="s84"><Data ss:Type="Number">2020</Data></Cell>
    <Cell ss:StyleID="s85"><Data ss:Type="String">. . . . . . . . . .</Data></Cell>
    <Cell ss:StyleID="s82"><Data ss:Type="String">(au titre duquel les retenues ont été effectuées)</Data></Cell>
    <Cell ss:StyleID="s82"/>
    <Cell ss:StyleID="s74"/>
    <Cell ss:StyleID="s74"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s81"/>
    <Cell ss:StyleID="s81"/>
    <Cell ss:StyleID="s81"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s86"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="21" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:MergeAcross="2" ss:StyleID="s72"><Data ss:Type="String">DE L'INDUSTRIE ET DU TOURISME</Data></Cell>
    <Cell ss:StyleID="s74"/>
    <Cell ss:StyleID="s74"/>
    <Cell ss:StyleID="s81"/>
    <Cell ss:StyleID="s87"/>
    <Cell ss:StyleID="s81"/>
    <Cell ss:StyleID="s81"/>
    <Cell ss:StyleID="s81"/>
    <Cell ss:StyleID="s87"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s88"><Data ss:Type="String">BORDEREAU DETAILLE DES SALAIRES VERSES AUX EMPLOYES</Data></Cell>
    <Cell ss:StyleID="s74"/>
    <Cell ss:StyleID="s74"/>
    <Cell ss:StyleID="s89"/>
    <Cell ss:StyleID="s89"/>
    <Cell ss:StyleID="s89"/>
    <Cell ss:StyleID="s74"/>
    <Cell ss:StyleID="s74"/>
    <Cell ss:StyleID="s90"/>
    <Cell ss:StyleID="s91"/>
    <Cell ss:StyleID="s91"/>
    <Cell ss:StyleID="s92"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s81"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:MergeAcross="2" ss:StyleID="s87"><Data ss:Type="String" x:Ticked="1">&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;&#45;-</Data></Cell>
    <Cell ss:StyleID="s81"/>
    <Cell ss:StyleID="s81"/>
    <Cell ss:StyleID="s81"/>
    <Cell ss:StyleID="s86"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s96"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:MergeAcross="2" ss:StyleID="s98"><Data ss:Type="String">DIRECTION GENERALE DES IMPOTS</Data></Cell>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s100"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s101"/>
    <Cell ss:StyleID="s96"/>
    <Cell ss:StyleID="s101"/>
    <Cell ss:StyleID="s101"/>
    <Cell ss:StyleID="s101"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s101"/>
    <Cell ss:StyleID="s101"/>
    <Cell ss:StyleID="s101"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="21" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:MergeAcross="2" ss:StyleID="s103"><Data ss:Type="String">BP 37 / 45 - Libreville</Data></Cell>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s104"><Data ss:Type="String">NOM DE L'ENTREPRISE OU RAISON SOCIALE : ORANGE BURKINA FASO</Data></Cell>
    <Cell ss:StyleID="s105"/>
    <Cell ss:StyleID="s106"/>
    <Cell ss:StyleID="s107"/>
    <Cell ss:StyleID="s106"/>
    <Cell ss:StyleID="s106"/>
    <Cell ss:StyleID="s106"/>
    <Cell ss:StyleID="s106"/>
    <Cell ss:StyleID="s106"/>
    <Cell ss:StyleID="s106"/>
    <Cell ss:StyleID="s106"/>
    <Cell ss:StyleID="s108"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s101"/>
    <Cell ss:StyleID="s109"/>
    <Cell ss:StyleID="s110"><Data ss:Type="String">(art. 90 du CGI)</Data></Cell>
    <Cell ss:StyleID="s110"/>
    <Cell ss:StyleID="s111"/>
    <Cell ss:StyleID="s111"/>
    <Cell ss:StyleID="s101"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="19.2" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:MergeAcross="2" ss:StyleID="s113"><Data ss:Type="String">Tel : 79.53.76/77</Data></Cell>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s104"><Data ss:Type="String">NIF  :</Data></Cell>
    <Cell ss:StyleID="s104"/>
    <Cell ss:MergeAcross="6" ss:StyleID="m2884566117224"><Data ss:Type="String">5 6 3 6 8 3 M</Data></Cell>
    <Cell ss:StyleID="s115"/>
    <Cell ss:StyleID="s115"/>
    <Cell ss:StyleID="s101"/>
    <Cell ss:StyleID="s116"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s96"/>
    <Cell ss:StyleID="s101"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s101"/>
    <Cell ss:StyleID="s101"/>
    <Cell ss:StyleID="s101"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s117"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67" ss:Formula="=TRIM(RC[-2])"><Data ss:Type="String"></Data></Cell>
    <Cell ss:StyleID="s67"><Data ss:Type="String"> </Data></Cell>
    <Cell ss:StyleID="s116"/>
    <Cell ss:StyleID="s118"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s116"/>
    <Cell ss:StyleID="s96"/>
    <Cell ss:StyleID="s101"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s117"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s119"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s101"/>
    <Cell ss:StyleID="s116"/>
    <Cell ss:StyleID="s118"/>
    <Cell ss:StyleID="s116"/>
    <Cell ss:StyleID="s118"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s116"/>
    <Cell ss:StyleID="s96"/>
    <Cell ss:StyleID="s101"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="21" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s117"/>
    <Cell ss:StyleID="s120"><Data ss:Type="String">Feuillet n°</Data></Cell>
    <Cell ss:StyleID="s122"><Data ss:Type="String" x:Ticked="1">1/<?=$nbpage?></Data></Cell>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s123"><Data ss:Type="String">La présente déclaration est à déposer avant le 30 avril simultanément aux déclarations n° ID01 ou ID14 </Data></Cell>
    <Cell ss:StyleID="s124"/>
    <Cell ss:StyleID="s82"/>
    <Cell ss:StyleID="s82"/>
    <Cell ss:StyleID="s82"/>
    <Cell ss:StyleID="s82"/>
    <Cell ss:StyleID="s82"/>
    <Cell ss:StyleID="s89"/>
    <Cell ss:StyleID="s125"/>
    <Cell ss:StyleID="s126"/>
    <Cell ss:StyleID="s127"/>
    <Cell ss:StyleID="s127"/>
    <Cell ss:StyleID="s88"/>
    <Cell ss:StyleID="s88"/>
    <Cell ss:StyleID="s116"/>
    <Cell ss:StyleID="s96"/>
    <Cell ss:StyleID="s101"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="28.5" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:MergeDown="3" ss:StyleID="s129"><Data ss:Type="String">E&#10;F&#10;F&#10;E&#10;C&#10;T&#10;I&#10;F&#10;S</Data></Cell>
    <Cell ss:MergeDown="3" ss:StyleID="s134"><Data ss:Type="String">NIF</Data></Cell>
    <Cell ss:MergeDown="3" ss:StyleID="s139"><Data ss:Type="String">Nom(s) et prénon(s)</Data></Cell>
    <Cell ss:MergeAcross="1" ss:MergeDown="1" ss:StyleID="m2884566117184"><Data
      ss:Type="String">CODE</Data></Cell>
    <Cell ss:MergeAcross="4" ss:MergeDown="1" ss:StyleID="m2884566117204"><Data
      ss:Type="String">AU  01/01/20…</Data></Cell>
    <Cell ss:MergeAcross="3" ss:MergeDown="1" ss:StyleID="m2884566117936"><Data
      ss:Type="String">Période mois</Data></Cell>
    <Cell ss:MergeAcross="3" ss:StyleID="m2884566117956"><Data ss:Type="String">PRESENCE AU GABON</Data></Cell>
    <Cell ss:MergeDown="3" ss:StyleID="s139"><Data ss:Type="String">Salaire brut de congés</Data></Cell>
    <Cell ss:MergeDown="3" ss:StyleID="s139"><Data ss:Type="String">Total              (1 à 5)</Data></Cell>
    <Cell ss:StyleID="s162"><Data ss:Type="String">IMPOTS RETENUS A LA SOURCE EN 20…</Data></Cell>
    <Cell ss:StyleID="s163"/>
    <Cell ss:StyleID="s163"/>
    <Cell ss:StyleID="s163"/>
    <Cell ss:StyleID="s164"/>
    <Cell ss:MergeDown="3" ss:StyleID="s166"><Data ss:Type="String">Indemnités non imposables</Data></Cell>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="17.25" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:Index="16" ss:MergeDown="2" ss:StyleID="s139"><Data ss:Type="String">Salaires   brut de présence</Data></Cell>
    <Cell ss:MergeAcross="1" ss:StyleID="m2884566118056"><Data ss:Type="String">AVANTAGES EN NATURE</Data></Cell>
    <Cell ss:MergeDown="2" ss:StyleID="s139"><Data ss:Type="String">Indemnités imposables</Data></Cell>
    <Cell ss:Index="22" ss:MergeDown="2" ss:StyleID="s139"><Data ss:Type="String">TCTS</Data></Cell>
    <Cell ss:MergeDown="2" ss:StyleID="s139"><Data ss:Type="String">IRPP</Data></Cell>
    <Cell ss:MergeDown="2" ss:StyleID="s139"><Data ss:Type="String">FNH</Data></Cell>
    <Cell ss:MergeDown="2" ss:StyleID="s139"><Data ss:Type="String">CFP</Data></Cell>
    <Cell ss:MergeDown="2" ss:StyleID="s139"><Data ss:Type="String">TOTAL (7+8+10)</Data></Cell>
    <Cell ss:Index="28" ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="15.75" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:Index="5" ss:MergeDown="1" ss:StyleID="s172"><Data ss:Type="String">EMPLOI</Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="s177"><Data ss:Type="String">NIVEAU</Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="s172"><Data ss:Type="String">NATIONAL</Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="s177"><Data ss:Type="String">AGE</Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="s172"><Data ss:Type="String">SEXE</Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="s172"><Data ss:Type="String">SIT FAMI</Data></Cell>
    <Cell ss:StyleID="s181"><Data ss:Type="String">Nbre</Data></Cell>
    <Cell ss:MergeAcross="1" ss:MergeDown="1" ss:StyleID="m2884566117492"><Data
      ss:Type="String">DEBUT</Data></Cell>
    <Cell ss:MergeAcross="1" ss:MergeDown="1" ss:StyleID="m2884566117520"><Data
      ss:Type="String">FIN</Data></Cell>
    <Cell ss:Index="17" ss:MergeDown="1" ss:StyleID="s139"><Data ss:Type="String">Logt, Eau, Electricité</Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="s139"><Data ss:Type="String">Nourriture</Data></Cell>
    <Cell ss:Index="28" ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="87.75" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:Index="11" ss:StyleID="s188"><Data ss:Type="String">ENFANTS</Data></Cell>
    <Cell ss:Index="28" ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="16.5" ss:StyleID="s189">
    <Cell ss:StyleID="s190"/>
    <Cell ss:StyleID="s191"/>
    <Cell ss:StyleID="s192"/>
    <Cell ss:StyleID="s193"/>
    <Cell ss:StyleID="s194"/>
    <Cell ss:StyleID="s195"/>
    <Cell ss:StyleID="s197"><Data ss:Type="String" x:Ticked="1">(1)</Data></Cell>
    <Cell ss:StyleID="s195"/>
    <Cell ss:StyleID="s199"><Data ss:Type="String" x:Ticked="1">(2)</Data></Cell>
    <Cell ss:StyleID="s199"><Data ss:Type="String" x:Ticked="1">(3)</Data></Cell>
    <Cell ss:StyleID="s195"/>
    <Cell ss:StyleID="s200"/>
    <Cell ss:StyleID="s201"/>
    <Cell ss:StyleID="s202"/>
    <Cell ss:StyleID="s201"/>
    <Cell ss:StyleID="s197"><Data ss:Type="String" x:Ticked="1">(1)</Data></Cell>
    <Cell ss:StyleID="s204"><Data ss:Type="String" x:Ticked="1">(2)</Data></Cell>
    <Cell ss:StyleID="s199"><Data ss:Type="String" x:Ticked="1">(3)</Data></Cell>
    <Cell ss:StyleID="s197"><Data ss:Type="String" x:Ticked="1">(4)</Data></Cell>
    <Cell ss:StyleID="s199"><Data ss:Type="String" x:Ticked="1">(5)</Data></Cell>
    <Cell ss:StyleID="s199"><Data ss:Type="String" x:Ticked="1">(6)</Data></Cell>
    <Cell ss:StyleID="s199"><Data ss:Type="String" x:Ticked="1">(7)</Data></Cell>
    <Cell ss:StyleID="s199"><Data ss:Type="String" x:Ticked="1">(8)</Data></Cell>
    <Cell ss:StyleID="s199"><Data ss:Type="String" x:Ticked="1">(9)</Data></Cell>
    <Cell ss:StyleID="s199"><Data ss:Type="String" x:Ticked="1">(10)</Data></Cell>
    <Cell ss:StyleID="s199"><Data ss:Type="String" x:Ticked="1">(11)</Data></Cell>
    <Cell ss:StyleID="s206"><Data ss:Type="String" x:Ticked="1">(12)</Data></Cell>
    <Cell ss:StyleID="s190"/>
    <Cell ss:StyleID="s190"/>
   </Row>
   
   <?php 
   $data = subArray(0,36,$traitementsDasSalarie);
   foreach($data as $da){
   ?>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s207"><Data ss:Type="Number"><?=$da->ordre?></Data></Cell>
    <Cell ss:StyleID="s207"><Data ss:Type="String"><?=$da->nif?></Data></Cell>
    <Cell ss:StyleID="s208"><Data ss:Type="String"><?=$da->nom." ".$da->prenom?></Data></Cell>
    <Cell ss:StyleID="s209"><Data ss:Type="Number"><?=$da->emploi?></Data></Cell>
    <Cell ss:StyleID="s209"><Data ss:Type="Number"><?=$da->niveau?></Data></Cell>
    <Cell ss:StyleID="s209"><Data ss:Type="Number"><?=$da->nationalite?></Data></Cell>
    <Cell ss:StyleID="s210"><Data ss:Type="Number"><?=$da->age?></Data></Cell>
    <Cell ss:StyleID="s209"><Data ss:Type="Number"><?=$da->sexe?></Data></Cell>
    <Cell ss:StyleID="s209"><Data ss:Type="Number"><?=$da->situation_familiale?></Data></Cell>
    <Cell ss:StyleID="s209"><Data ss:Type="Number"><?=$da->enfants?></Data></Cell>
    <Cell ss:StyleID="s210"><Data ss:Type="Number"><?=$da->deb10?></Data></Cell>
    <Cell ss:StyleID="s210"><Data ss:Type="Number"><?=$da->deb11?></Data></Cell>
    <Cell ss:StyleID="s210"><Data ss:Type="Number"><?=$da->fin12?></Data></Cell>
    <Cell ss:StyleID="s210"><Data ss:Type="Number"><?=$da->fin13das?></Data></Cell>
    <Cell ss:StyleID="s211"><Data ss:Type="Number"><?=$da->salaire_brut?></Data></Cell>
    <Cell ss:StyleID="s211"><Data ss:Type="Number"><?=$da->avlog?></Data></Cell>
    <Cell ss:StyleID="s211"><Data ss:Type="Number"><?=$da->av_nour?></Data></Cell>
    <Cell ss:StyleID="s211"><Data ss:Type="Number"><?=$da->prim_impo?></Data></Cell>
    <Cell ss:StyleID="s211"><Data ss:Type="Number"><?=$da->brut_conge?></Data></Cell>
    <Cell ss:StyleID="s211"><Data ss:Type="Number"><?=$da->total_brut?></Data></Cell>
    <Cell ss:StyleID="s211"><Data ss:Type="Number"><?=$da->tcs?></Data></Cell>
    <Cell ss:StyleID="s211"><Data ss:Type="Number"><?=$da->irpp?></Data></Cell>
    <Cell ss:StyleID="s211"><Data ss:Type="Number"><?=$da->fnh?></Data></Cell>
    <Cell ss:StyleID="s212"><Data ss:Type="Number"><?=$da->cfp?></Data></Cell>
    <Cell ss:StyleID="s211"><Data ss:Type="Number"><?=$da->total?></Data></Cell>
    <Cell ss:StyleID="s211"><Data ss:Type="Number"><?=$da->primes_non_impo?></Data></Cell>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   
    <?php } ?>


   <Row ss:AutoFitHeight="0" ss:Height="19.5" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s213"/>
    <Cell ss:StyleID="s214"/>
    <Cell ss:StyleID="s215"><Data ss:Type="String">TOTAUX A REPORTER SUR LA FEUILLE SUIVANTE</Data></Cell>
    <Cell ss:StyleID="s216"/>
    <Cell ss:StyleID="s216"/>
    <Cell ss:StyleID="s216"/>
    <Cell ss:StyleID="s216"/>
    <Cell ss:StyleID="s216"/>
    <Cell ss:StyleID="s216"/>
    <Cell ss:StyleID="s216"/>
    <Cell ss:StyleID="s216"/>
    <Cell ss:StyleID="s216"/>
    <Cell ss:StyleID="s216"/>
    <Cell ss:StyleID="s217"/>
    <Cell ss:StyleID="s218" ss:Formula="=SUM(R[-36]C:R[-1]C)"><Data
      ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s218" ss:Formula="=SUM(R[-36]C:R[-1]C)"><Data
      ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s218" ss:Formula="=SUM(R[-36]C:R[-1]C)"><Data
      ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s218" ss:Formula="=SUM(R[-36]C:R[-1]C)"><Data
      ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s218" ss:Formula="=SUM(R[-36]C:R[-1]C)"><Data
      ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s218" ss:Formula="=SUM(R[-36]C:R[-1]C)"><Data
      ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s218" ss:Formula="=SUM(R[-36]C:R[-1]C)"><Data
      ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s218" ss:Formula="=SUM(R[-36]C:R[-1]C)"><Data
      ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s218" ss:Formula="=SUM(R[-36]C:R[-1]C)"><Data
      ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s219" ss:Formula="=SUM(R[-36]C:R[-1]C)"><Data
      ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s218" ss:Formula="=SUM(R[-36]C:R[-1]C)"><Data
      ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s220" ss:Formula="=SUM(R[-36]C:R[-1]C)"><Data
      ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s221"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s222"/>
    <Cell ss:StyleID="s223"/>
    <Cell ss:StyleID="s224"><Data ss:Type="String">Joindre un bulletin indiviuduel ID19 par salarié percevant plus de 80 000 FCFA par mois</Data></Cell>
    <Cell ss:StyleID="s224"/>
    <Cell ss:StyleID="s224"/>
    <Cell ss:StyleID="s224"/>
    <Cell ss:StyleID="s224"/>
    <Cell ss:StyleID="s224"/>
    <Cell ss:StyleID="s224"/>
    <Cell ss:StyleID="s224"/>
    <Cell ss:StyleID="s224"/>
    <Cell ss:StyleID="s224"/>
    <Cell ss:StyleID="s224"/>
    <Cell ss:StyleID="s224"/>
    <Cell ss:StyleID="s225"/>
    <Cell ss:StyleID="s225"/>
    <Cell ss:StyleID="s221"/>
    <Cell ss:StyleID="s221"/>
    <Cell ss:StyleID="s221"/>
    <Cell ss:StyleID="s221"/>
    <Cell ss:StyleID="s221"/>
    <Cell ss:StyleID="s221"/>
    <Cell ss:StyleID="s221"/>
    <Cell ss:StyleID="s221"/>
    <Cell ss:StyleID="s221"/>
    <Cell ss:StyleID="s221"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s226"/>
    <Cell ss:StyleID="s226"/>
    <Cell ss:StyleID="s226"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"><Data ss:Type="String"> </Data></Cell>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"><Data ss:Type="String"> </Data></Cell>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"><Data ss:Type="String">1  Nationalité : Gabonais : 1 ; CEMAC : 2 ; Autres africains : 3 ; Non africains :4</Data></Cell>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s228"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"><Data ss:Type="String">2  Sexe : Masculin ;  Feminin : 2</Data></Cell>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s228"/>
    <Cell ss:StyleID="s228"/>
    <Cell ss:StyleID="s228"/>
    <Cell ss:StyleID="s228"/>
    <Cell ss:StyleID="s228"/>
    <Cell ss:StyleID="s228"/>
    <Cell ss:StyleID="s228"/>
    <Cell ss:StyleID="s228"/>
    <Cell ss:StyleID="s228"/>
    <Cell ss:StyleID="s228"/>
    <Cell ss:StyleID="s228"/>
    <Cell ss:StyleID="s228"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"><Data ss:Type="String">3  Situation familiale : Marié : 1 ; Célibataire : 2  ; Veuf : 3 ; Divorcé : 4</Data></Cell>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s227"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s229"><Data ss:Type="String">N°1</Data></Cell>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   
    <?php
        $nbpage = intval(count($traitementsDasSalarie)/49);
        $nbpage = $nbpage + ((count($traitementsDasSalarie)%49)==0?0:1);
        for($i=2;$i<=$nbpage;$i++){
            $start =  36 + 49*($i-2);
            $data = [];
            $data = subArray($start,49,$traitementsDasSalarie); 
        
    ?>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64"/>
   <Row ss:AutoFitHeight="0" ss:Height="21" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s117"/>
    <Cell ss:StyleID="s120"><Data ss:Type="String">Feuillet n°</Data></Cell>
    <Cell ss:StyleID="s122"><Data ss:Type="String" x:Ticked="1"><?=($i)?>/<?=$nbpage?></Data></Cell>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s99"/>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s123"><Data ss:Type="String">La présente déclaration est à déposer avant le 30 avril simultanément aux déclarations n° ID01 ou ID14 </Data></Cell>
    <Cell ss:StyleID="s124"/>
    <Cell ss:StyleID="s82"/>
    <Cell ss:StyleID="s82"/>
    <Cell ss:StyleID="s82"/>
    <Cell ss:StyleID="s82"/>
    <Cell ss:StyleID="s82"/>
    <Cell ss:StyleID="s89"/>
    <Cell ss:StyleID="s125"/>
    <Cell ss:StyleID="s126"/>
    <Cell ss:StyleID="s127"/>
    <Cell ss:StyleID="s127"/>
    <Cell ss:StyleID="s88"/>
    <Cell ss:StyleID="s88"/>
    <Cell ss:StyleID="s116"/>
    <Cell ss:StyleID="s96"/>
    <Cell ss:StyleID="s101"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s79"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="28.5" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:MergeDown="3" ss:StyleID="s129"><Data ss:Type="String">E&#10;F&#10;F&#10;E&#10;C&#10;T&#10;I&#10;F&#10;S</Data></Cell>
    <Cell ss:MergeDown="3" ss:StyleID="s134"><Data ss:Type="String">NIF</Data></Cell>
    <Cell ss:MergeDown="3" ss:StyleID="s139"><Data ss:Type="String">Nom(s) et prénon(s)</Data></Cell>
    <Cell ss:MergeAcross="1" ss:MergeDown="1" ss:StyleID="m2884566117640"><Data
      ss:Type="String">CODE</Data></Cell>
    <Cell ss:MergeAcross="4" ss:MergeDown="1" ss:StyleID="m2884566117660"><Data
      ss:Type="String">AU  01/01/20…</Data></Cell>
    <Cell ss:MergeAcross="3" ss:MergeDown="1" ss:StyleID="m2884566117680"><Data
      ss:Type="String">Période mois</Data></Cell>
    <Cell ss:MergeAcross="3" ss:StyleID="m2884566117700"><Data ss:Type="String">PRESENCE AU GABON</Data></Cell>
    <Cell ss:MergeDown="3" ss:StyleID="s139"><Data ss:Type="String">Salaire brut de congés</Data></Cell>
    <Cell ss:MergeDown="3" ss:StyleID="s139"><Data ss:Type="String">Total              (1 à 5)</Data></Cell>
    <Cell ss:StyleID="s162"><Data ss:Type="String">IMPOTS RETENUS A LA SOURCE EN 20…</Data></Cell>
    <Cell ss:StyleID="s163"/>
    <Cell ss:StyleID="s163"/>
    <Cell ss:StyleID="s163"/>
    <Cell ss:StyleID="s164"/>
    <Cell ss:MergeDown="3" ss:StyleID="s166"><Data ss:Type="String">Indemnités non imposables</Data></Cell>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="17.25" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:Index="16" ss:MergeDown="2" ss:StyleID="s139"><Data ss:Type="String">Salaires   brut de présence</Data></Cell>
    <Cell ss:MergeAcross="1" ss:StyleID="m2884566114480"><Data ss:Type="String">AVANTAGES EN NATURE</Data></Cell>
    <Cell ss:MergeDown="2" ss:StyleID="s139"><Data ss:Type="String">Indemnités imposables</Data></Cell>
    <Cell ss:Index="22" ss:MergeDown="2" ss:StyleID="s139"><Data ss:Type="String">TCTS</Data></Cell>
    <Cell ss:MergeDown="2" ss:StyleID="s139"><Data ss:Type="String">IRPP</Data></Cell>
    <Cell ss:MergeDown="2" ss:StyleID="s139"><Data ss:Type="String">FNH</Data></Cell>
    <Cell ss:MergeDown="2" ss:StyleID="s139"><Data ss:Type="String">CFP</Data></Cell>
    <Cell ss:MergeDown="2" ss:StyleID="s139"><Data ss:Type="String">TOTAL (7+8+10)</Data></Cell>
    <Cell ss:Index="28" ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="15.75" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:Index="5" ss:MergeDown="1" ss:StyleID="s172"><Data ss:Type="String">EMPLOI</Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="s177"><Data ss:Type="String">NIVEAU</Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="s172"><Data ss:Type="String">NATIONAL</Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="s177"><Data ss:Type="String">AGE</Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="s172"><Data ss:Type="String">SEXE</Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="s172"><Data ss:Type="String">SIT FAMI</Data></Cell>
    <Cell ss:StyleID="s181"><Data ss:Type="String">Nbre</Data></Cell>
    <Cell ss:MergeAcross="1" ss:MergeDown="1" ss:StyleID="m2884566114332"><Data
      ss:Type="String">DEBUT</Data></Cell>
    <Cell ss:MergeAcross="1" ss:MergeDown="1" ss:StyleID="m2884566114352"><Data
      ss:Type="String">FIN</Data></Cell>
    <Cell ss:Index="17" ss:MergeDown="1" ss:StyleID="s139"><Data ss:Type="String">Logt, Eau, Electricité</Data></Cell>
    <Cell ss:MergeDown="1" ss:StyleID="s139"><Data ss:Type="String">Nourriture</Data></Cell>
    <Cell ss:Index="28" ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="87.75" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:Index="11" ss:StyleID="s188"><Data ss:Type="String">ENFANTS</Data></Cell>
    <Cell ss:Index="28" ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="16.5" ss:StyleID="s189">
    <Cell ss:StyleID="s190"/>
    <Cell ss:StyleID="s191"/>
    <Cell ss:StyleID="s192"/>
    <Cell ss:StyleID="s193"/>
    <Cell ss:StyleID="s194"/>
    <Cell ss:StyleID="s195"/>
    <Cell ss:StyleID="s197"><Data ss:Type="String" x:Ticked="1">(1)</Data></Cell>
    <Cell ss:StyleID="s195"/>
    <Cell ss:StyleID="s199"><Data ss:Type="String" x:Ticked="1">(2)</Data></Cell>
    <Cell ss:StyleID="s199"><Data ss:Type="String" x:Ticked="1">(3)</Data></Cell>
    <Cell ss:StyleID="s195"/>
    <Cell ss:StyleID="s200"/>
    <Cell ss:StyleID="s201"/>
    <Cell ss:StyleID="s202"/>
    <Cell ss:StyleID="s201"/>
    <Cell ss:StyleID="s197"><Data ss:Type="String" x:Ticked="1">(1)</Data></Cell>
    <Cell ss:StyleID="s204"><Data ss:Type="String" x:Ticked="1">(2)</Data></Cell>
    <Cell ss:StyleID="s199"><Data ss:Type="String" x:Ticked="1">(3)</Data></Cell>
    <Cell ss:StyleID="s197"><Data ss:Type="String" x:Ticked="1">(4)</Data></Cell>
    <Cell ss:StyleID="s199"><Data ss:Type="String" x:Ticked="1">(5)</Data></Cell>
    <Cell ss:StyleID="s199"><Data ss:Type="String" x:Ticked="1">(6)</Data></Cell>
    <Cell ss:StyleID="s199"><Data ss:Type="String" x:Ticked="1">(7)</Data></Cell>
    <Cell ss:StyleID="s199"><Data ss:Type="String" x:Ticked="1">(8)</Data></Cell>
    <Cell ss:StyleID="s199"><Data ss:Type="String" x:Ticked="1">(9)</Data></Cell>
    <Cell ss:StyleID="s199"><Data ss:Type="String" x:Ticked="1">(10)</Data></Cell>
    <Cell ss:StyleID="s199"><Data ss:Type="String" x:Ticked="1">(11)</Data></Cell>
    <Cell ss:StyleID="s231"><Data ss:Type="String" x:Ticked="1">(12)</Data></Cell>
    <Cell ss:StyleID="s190"/>
    <Cell ss:StyleID="s190"/>
   </Row>
   <?php
   foreach($data as $da){ ?>
   
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s207"><Data ss:Type="Number"><?=$da->ordre?></Data></Cell>
    <Cell ss:StyleID="s207"><Data ss:Type="String"><?=$da->nif?></Data></Cell>
    <Cell ss:StyleID="s208"><Data ss:Type="String"><?=$da->nom." ".$da->prenom?></Data></Cell>
    <Cell ss:StyleID="s209"><Data ss:Type="Number"><?=$da->emploi?></Data></Cell>
    <Cell ss:StyleID="s209"><Data ss:Type="Number"><?=$da->niveau?></Data></Cell>
    <Cell ss:StyleID="s209"><Data ss:Type="Number"><?=$da->nationalite?></Data></Cell>
    <Cell ss:StyleID="s210"><Data ss:Type="Number"><?=$da->age?></Data></Cell>
    <Cell ss:StyleID="s209"><Data ss:Type="Number"><?=$da->sexe?></Data></Cell>
    <Cell ss:StyleID="s209"><Data ss:Type="Number"><?=$da->situation_familiale?></Data></Cell>
    <Cell ss:StyleID="s209"><Data ss:Type="Number"><?=$da->enfants?></Data></Cell>
    <Cell ss:StyleID="s210"><Data ss:Type="Number"><?=$da->deb10?></Data></Cell>
    <Cell ss:StyleID="s210"><Data ss:Type="Number"><?=$da->deb11?></Data></Cell>
    <Cell ss:StyleID="s210"><Data ss:Type="Number"><?=$da->fin12?></Data></Cell>
    <Cell ss:StyleID="s210"><Data ss:Type="Number"><?=$da->fin13das?></Data></Cell>
    <Cell ss:StyleID="s211"><Data ss:Type="Number"><?=$da->salaire_brut?></Data></Cell>
    <Cell ss:StyleID="s211"><Data ss:Type="Number"><?=$da->avlog?></Data></Cell>
    <Cell ss:StyleID="s211"><Data ss:Type="Number"><?=$da->av_nour?></Data></Cell>
    <Cell ss:StyleID="s211"><Data ss:Type="Number"><?=$da->prim_impo?></Data></Cell>
    <Cell ss:StyleID="s211"><Data ss:Type="Number"><?=$da->brut_conge?></Data></Cell>
    <Cell ss:StyleID="s211"><Data ss:Type="Number"><?=$da->total_brut?></Data></Cell>
    <Cell ss:StyleID="s211"><Data ss:Type="Number"><?=$da->tcs?></Data></Cell>
    <Cell ss:StyleID="s211"><Data ss:Type="Number"><?=$da->irpp?></Data></Cell>
    <Cell ss:StyleID="s211"><Data ss:Type="Number"><?=$da->fnh?></Data></Cell>
    <Cell ss:StyleID="s212"><Data ss:Type="Number"><?=$da->cfp?></Data></Cell>
    <Cell ss:StyleID="s211"><Data ss:Type="Number"><?=$da->total?></Data></Cell>
    <Cell ss:StyleID="s211"><Data ss:Type="Number"><?=$da->primes_non_impo?></Data></Cell>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <?php }?>
   
   <Row ss:AutoFitHeight="0" ss:Height="19.5" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s233"/>
    <Cell ss:StyleID="s234"/>
    <Cell ss:StyleID="s235"><Data ss:Type="String">TOTAUX</Data></Cell>
    <Cell ss:StyleID="s236"/>
    <Cell ss:StyleID="s236"/>
    <Cell ss:StyleID="s236"/>
    <Cell ss:StyleID="s236"/>
    <Cell ss:StyleID="s236"/>
    <Cell ss:StyleID="s236"/>
    <Cell ss:StyleID="s236"/>
    <Cell ss:StyleID="s236"/>
    <Cell ss:StyleID="s236"/>
    <Cell ss:StyleID="s236"/>
    <Cell ss:StyleID="s237"/>
    <Cell ss:StyleID="s238" ss:Formula="=SUM(R[-49]C:R[-1]C)"><Data
      ss:Type="Number">744784</Data></Cell>
    <Cell ss:StyleID="s238" ss:Formula="=SUM(R[-49]C:R[-1]C)"><Data
      ss:Type="Number">78307</Data></Cell>
    <Cell ss:StyleID="s238" ss:Formula="=SUM(R[-49]C:R[-1]C)"><Data
      ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s238" ss:Formula="=SUM(R[-49]C:R[-1]C)"><Data
      ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s238" ss:Formula="=SUM(R[-49]C:R[-1]C)"><Data
      ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s238" ss:Formula="=SUM(R[-49]C:R[-1]C)"><Data
      ss:Type="Number">823091</Data></Cell>
    <Cell ss:StyleID="s238" ss:Formula="=SUM(R[-49]C:R[-1]C)"><Data
      ss:Type="Number">28669</Data></Cell>
    <Cell ss:StyleID="s238" ss:Formula="=SUM(R[-49]C:R[-1]C)"><Data
      ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s238" ss:Formula="=SUM(R[-49]C:R[-1]C)"><Data
      ss:Type="Number">20360</Data></Cell>
    <Cell ss:StyleID="s238" ss:Formula="=SUM(R[-49]C:R[-1]C)"><Data
      ss:Type="Number">5090</Data></Cell>
    <Cell ss:StyleID="s238" ss:Formula="=SUM(R[-49]C:R[-1]C)"><Data
      ss:Type="Number">54119</Data></Cell>
    <Cell ss:StyleID="s238" ss:Formula="=SUM(R[-49]C:R[-1]C)"><Data
      ss:Type="Number">409190</Data></Cell>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s233"/>
    <Cell ss:StyleID="s234"/>
    <Cell ss:StyleID="s236"><Data ss:Type="String">TOTAUX REPORTES DE LA FEUILLE PRECEDENTE</Data></Cell>
    <Cell ss:StyleID="s236"/>
    <Cell ss:StyleID="s236"/>
    <Cell ss:StyleID="s236"/>
    <Cell ss:StyleID="s236"/>
    <Cell ss:StyleID="s236"/>
    <Cell ss:StyleID="s236"/>
    <Cell ss:StyleID="s236"/>
    <Cell ss:StyleID="s236"/>
    <Cell ss:StyleID="s236"/>
    <Cell ss:StyleID="s236"/>
    <Cell ss:StyleID="s237"/>
    <Cell ss:StyleID="s239" ss:Formula="=R[-69]C"><Data ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s239" ss:Formula="=R[-69]C"><Data ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s239" ss:Formula="=R[-69]C"><Data ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s239" ss:Formula="=R[-69]C"><Data ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s239" ss:Formula="=R[-69]C"><Data ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s239" ss:Formula="=R[-69]C"><Data ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s239" ss:Formula="=R[-69]C"><Data ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s239" ss:Formula="=R[-69]C"><Data ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s239" ss:Formula="=R[-69]C"><Data ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s239" ss:Formula="=R[-69]C"><Data ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s239" ss:Formula="=R[-69]C"><Data ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s239" ss:Formula="=R[-69]C"><Data ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:Height="19.5" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>

    <Cell ss:StyleID="s240"/>
    <Cell ss:StyleID="s241"/>
    <Cell ss:StyleID="s242"><Data ss:Type="String">TOTAUX A REPORTER SUR LA FEUILLE SUIVANTE</Data></Cell>
    <Cell ss:StyleID="s242"/>
    <Cell ss:StyleID="s242"/>
    <Cell ss:StyleID="s242"/>
    <Cell ss:StyleID="s242"/>
    <Cell ss:StyleID="s242"/>
    <Cell ss:StyleID="s242"/>
    <Cell ss:StyleID="s242"/>
    <Cell ss:StyleID="s242"/>
    <Cell ss:StyleID="s242"/>
    <Cell ss:StyleID="s242"/>
    <Cell ss:StyleID="s243"/>
    <Cell ss:StyleID="s218" ss:Formula="=R[-2]C+R[-1]C"><Data ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s218" ss:Formula="=R[-2]C+R[-1]C"><Data ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s218" ss:Formula="=R[-2]C+R[-1]C"><Data ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s218" ss:Formula="=R[-2]C+R[-1]C"><Data ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s218" ss:Formula="=R[-2]C+R[-1]C"><Data ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s218" ss:Formula="=R[-2]C+R[-1]C"><Data ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s218" ss:Formula="=R[-2]C+R[-1]C"><Data ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s218" ss:Formula="=R[-2]C+R[-1]C"><Data ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s218" ss:Formula="=R[-2]C+R[-1]C"><Data ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s218" ss:Formula="=R[-2]C+R[-1]C"><Data ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s218" ss:Formula="=R[-2]C+R[-1]C"><Data ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s218" ss:Formula="=R[-2]C+R[-1]C"><Data ss:Type="Number">0</Data></Cell>
    <Cell ss:StyleID="s221"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s222"/>
    <Cell ss:StyleID="s223"/>
    <Cell ss:StyleID="s244"><Data ss:Type="String">Joindre un bulletin indiviuduel ID19 par salarié percevant plus de 80 000 FCFA par mois</Data></Cell>
    <Cell ss:StyleID="s244"/>
    <Cell ss:StyleID="s244"/>
    <Cell ss:StyleID="s244"/>
    <Cell ss:StyleID="s244"/>
    <Cell ss:StyleID="s244"/>
    <Cell ss:StyleID="s244"/>
    <Cell ss:StyleID="s244"/>
    <Cell ss:StyleID="s244"/>
    <Cell ss:StyleID="s244"/>
    <Cell ss:StyleID="s244"/>
    <Cell ss:StyleID="s244"/>
    <Cell ss:StyleID="s225"/>
    <Cell ss:StyleID="s225"/>
    <Cell ss:StyleID="s221"/>
    <Cell ss:StyleID="s221"/>
    <Cell ss:StyleID="s221"/>
    <Cell ss:StyleID="s221"/>
    <Cell ss:StyleID="s221"/>
    <Cell ss:StyleID="s221"/>
    <Cell ss:StyleID="s221"/>
    <Cell ss:StyleID="s221"/>
    <Cell ss:StyleID="s221"/>
    <Cell ss:StyleID="s221"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:StyleID="s67"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s69"/>
    <Cell ss:StyleID="s67"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:Index="2" ss:StyleID="s245"/>
    <Cell ss:StyleID="s246"/>
    <Cell ss:StyleID="s246"/>
    <Cell ss:StyleID="s246"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"><Data ss:Type="String"> </Data></Cell>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:Index="2" ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s245"><Data ss:Type="String"> </Data></Cell>
    <Cell ss:StyleID="s245"/>
    <Cell ss:StyleID="s247"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:Index="2" ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"><Data ss:Type="String">1  Nationalité : Gabonais : 1 ; CEMAC : 2 ; Autres africains : 3 ; Non africains :4</Data></Cell>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s248"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s249"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:Index="2" ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"><Data ss:Type="String">2  Sexe : Masculin ;  Feminin : 2</Data></Cell>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s249"/>
    <Cell ss:StyleID="s249"><Data ss:Type="String"> </Data></Cell>
    <Cell ss:StyleID="s249"/>
    <Cell ss:StyleID="s249"/>
    <Cell ss:StyleID="s249"/>
    <Cell ss:StyleID="s249"/>
    <Cell ss:StyleID="s249"/>
    <Cell ss:StyleID="s249"/>
    <Cell ss:StyleID="s249"/>
    <Cell ss:StyleID="s249"/>
    <Cell ss:StyleID="s249"/>
    <Cell ss:StyleID="s249"/>
    <Cell ss:StyleID="s247"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:Index="2" ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"><Data ss:Type="String">3  Situation familiale : Marié : 1 ; Célibataire : 2  ; Veuf : 3 ; Divorcé : 4</Data></Cell>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
    <Cell ss:StyleID="s247"/>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64"/>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64">
    <Cell ss:Index="18" ss:StyleID="s66"><Data ss:Type="String">N°<?=($i)?></Data></Cell>
   </Row>
   <Row ss:AutoFitHeight="0" ss:StyleID="s64"/>
   <?php } //END IF 
   ?>
   
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
    <Scale>44</Scale>
    <HorizontalResolution>600</HorizontalResolution>
    <VerticalResolution>600</VerticalResolution>
   </Print>
   <Zoom>50</Zoom>
   <Selected/>
   <TopRowVisible>7</TopRowVisible>
   <Panes>
    <Pane>
     <Number>3</Number>
     <ActiveRow>11</ActiveRow>
     <ActiveCol>17</ActiveCol>
    </Pane>
   </Panes>
   <ProtectObjects>False</ProtectObjects>
   <ProtectScenarios>False</ProtectScenarios>
  </WorksheetOptions>
 </Worksheet>
</Workbook>
