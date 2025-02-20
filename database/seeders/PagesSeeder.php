<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PagesSeeder extends Seeder
{
     /**
      * Run the database seeds.
      */
     public function run(): void
     {
          $superAdmin = User::firstWhere('name', 'Süper Yönetici');
          $pages = [
               [
                    'user_id' => $superAdmin->user_id,
                    'title' => 'Üyelik Sözleşmesi',
                    'slug' => Str::slug('Üyelik Sözleşmesi'),
                    'content' => '<!--[if gte mso 9]><xml>
 <o:OfficeDocumentSettings>
  <o:RelyOnVML/>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:View>Normal</w:View>
  <w:Zoom>0</w:Zoom>
  <w:TrackMoves/>
  <w:TrackFormatting/>
  <w:PunctuationKerning/>
  <w:ValidateAgainstSchemas/>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:DoNotPromoteQF/>
  <w:LidThemeOther>TR</w:LidThemeOther>
  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
  <w:Compatibility>
   <w:BreakWrappedTables/>
   <w:SnapToGridInCell/>
   <w:WrapTextWithPunct/>
   <w:UseAsianBreakRules/>
   <w:DontGrowAutofit/>
   <w:SplitPgBreakAndParaMark/>
   <w:EnableOpenTypeKerning/>
   <w:DontFlipMirrorIndents/>
   <w:OverrideTableStyleHps/>
  </w:Compatibility>
  <m:mathPr>
   <m:mathFont m:val="Cambria Math"/>
   <m:brkBin m:val="before"/>
   <m:brkBinSub m:val="&#45;-"/>
   <m:smallFrac m:val="off"/>
   <m:dispDef/>
   <m:lMargin m:val="0"/>
   <m:rMargin m:val="0"/>
   <m:defJc m:val="centerGroup"/>
   <m:wrapIndent m:val="1440"/>
   <m:intLim m:val="subSup"/>
   <m:naryLim m:val="undOvr"/>
  </m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
  DefSemiHidden="false" DefQFormat="false" DefPriority="99"
  LatentStyleCount="376">
  <w:LsdException Locked="false" Priority="0" QFormat="true" Name="Normal"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 1"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 2"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 3"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 9"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 1"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 2"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 3"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 4"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 5"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 6"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 7"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 8"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="header"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footer"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index heading"/>
  <w:LsdException Locked="false" Priority="35" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="caption"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of figures"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope return"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="line number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="page number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of authorities"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="macro"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toa heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 5"/>
  <w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Closing"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Signature"/>
  <w:LsdException Locked="false" Priority="1" SemiHidden="true"
   UnhideWhenUsed="true" Name="Default Paragraph Font"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Message Header"/>
  <w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Salutation"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Date"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Note Heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Block Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Hyperlink"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="FollowedHyperlink"/>
  <w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>
  <w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Document Map"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Plain Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="E-mail Signature"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Top of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Bottom of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal (Web)"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Acronym"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Cite"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Code"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Definition"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Keyboard"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Preformatted"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Sample"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Typewriter"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Variable"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Table"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation subject"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="No List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Contemporary"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Elegant"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Professional"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Balloon Text"/>
  <w:LsdException Locked="false" Priority="39" Name="Table Grid"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Theme"/>
  <w:LsdException Locked="false" SemiHidden="true" Name="Placeholder Text"/>
  <w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>
  <w:LsdException Locked="false" SemiHidden="true" Name="Revision"/>
  <w:LsdException Locked="false" Priority="34" QFormat="true"
   Name="List Paragraph"/>
  <w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
  <w:LsdException Locked="false" Priority="30" QFormat="true"
   Name="Intense Quote"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="19" QFormat="true"
   Name="Subtle Emphasis"/>
  <w:LsdException Locked="false" Priority="21" QFormat="true"
   Name="Intense Emphasis"/>
  <w:LsdException Locked="false" Priority="31" QFormat="true"
   Name="Subtle Reference"/>
  <w:LsdException Locked="false" Priority="32" QFormat="true"
   Name="Intense Reference"/>
  <w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
  <w:LsdException Locked="false" Priority="37" SemiHidden="true"
   UnhideWhenUsed="true" Name="Bibliography"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
  <w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
  <w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
  <w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
  <w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
  <w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
  <w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
  <w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Mention"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Smart Hyperlink"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Hashtag"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Unresolved Mention"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Smart Link"/>
 </w:LatentStyles>
</xml><![endif]--><!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Table Normal";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-parent:"";
	mso-padding-alt:0in 5.4pt 0in 5.4pt;
	mso-para-margin:0in;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-ansi-language:TR;}
</style>
<![endif]-->

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">İşbu Üyelik Sözleşmesi
(“</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:
&quot;Segoe UI&quot;;color:#030349">Sözleşme</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">”), Türkiye Cumhuriyeti
kanunları uyarınca kurulmuş ve mevcudiyetini sürdüren bir limited şirketi olan,
İstanbul Ticaret Odası </span><span lang="TR">430579-5</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"> sicil numarası ile
kaydedilmiş bulunan ve&nbsp;</span><span lang="TR">ALTUNİZADE MAH. ÜNİVERSİTE SK.
NO: 8 ÜSKÜDAR/İSTANBUL </span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">adresinde mukim&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Talento
Sound Eğitim ve Danışmanlık Hizmetleri Ticaret Limited Şirketi&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">("</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">Şirket veya Talento Sound</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">") ile&nbsp;</span><span lang="TR"><a href="https://kidolog.com/"><span style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">talentosound.</span></a></span><span class="MsoHyperlink"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:
&quot;Segoe UI&quot;;color:#007BFF">com.tr </span></span><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349">internet sitesi (“</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">İnternet Sitesi</span></strong><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349">”) ve/veya mobil uygulaması (</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">“Mobil Uygulama”</span></strong><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349">) üyesi (“</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Danışan</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">”) arasında,
Danışan’ın İnternet Sitesi ve/veya Mobil Uygulama’yı kullanmasına yönelik
olarak ve Sözleşme’nin üye tarafından elektronik ortamda kabulü ile birlikte
yürürlüğe girecek olup taraflarca Sözleşme’de belirtilen usuller doğrultusunda
sona erdirilmediği sürece yürürlükte kalmaya devam edecektir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">İşbu Sözleşme,
Taraflarca imzalandığı / onaylandığı tarihte yürürlüğe girer ve Danışan’ın
Şirket üyeliğini devam ettirdiği müddetçe yürürlükte kalır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket’e üye olmanızdan
itibaren, aşağıda yazılı olan ve üye olmaya ilişkin önemli bilgiler içeren
hususları bütünüyle anlamış ve tamamını ayrılmaz bir bütün olarak kabul etmiş
sayılırsınız.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket’e üye olmadan
önce lütfen işbu Üyelik Sözleşmesi’ni ve eklerini dikkatle okuyunuz. Üyelik
Sözleşmesi’nin ve eklerinin içerdiği tüm maddeleri ve hükümleri
onaylamıyorsanız üyelik sürecini tamamlamayınız. Yeni üyelik oluşturma
esnasında, bu metinleri okuduğunuzu ifade eden bir bölümle karşılaşacaksınız,
bu kısmı işaretlemeniz aşağıdaki ve ek belgelerdeki tüm maddelerin tamamını
kabul ettiğiniz anlamına gelecektir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Üyelik Sözleşmesi’nde
yer almayan her türlü bilgi ve tanım için işbu Üyelik Sözleşmesi’nin
Şirket’deki diğer belge ve açıklamalardan oluşan ve bununla sınırlı olmayan
ekleri ile birlikte ayrılmaz parçalarından biri olan Kullanım Koşulları
geçerlidir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Sözleşme’nin Konusu</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">1.1.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">İşbu Üyelik
Sözleşmesi (“Sözleşme”),&nbsp;</span><strong><span lang="TR" style="font-family:
&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Talento Sound
Eğitim ve Danışmanlık Hizmetleri Ticaret Limited Şirketi</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"> ("</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">Şirket veya Talento Sound</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">"),&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">Üye (“Danışan</span></strong><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349">”) olarak&nbsp;</span><span lang="TR"><a href="https://kidolog.com/"><span style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">talentosound.online</span></a></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;alan
kodunda yer alan internet sitesi ve/veya Şirket mobil uygulaması aracılığıyla
Ürün ve/veya Hizmet’i alan kişiler için geçerlidir. Uzmanlar (</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">“Danışman”</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">) olarak&nbsp;</span><span lang="TR"><a href="https://kidolog.com/"><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">talentosound.</span></a></span><span class="MsoHyperlink"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:
&quot;Segoe UI&quot;;color:#007BFF">com.tr</span></span><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349"> alan kodunda yer alan sitede veya Şirket
mobil uygulaması aracılığıyla Ürün ve/veya Hizmetler’i doğrudan sunan kişiler
anlamına gelmektedir. Sözleşme, Danışan tarafından elektronik ortamda kabulü
ile birlikte yürürlüğe girecek olup taraflarca Sözleşme’de belirtilen usul ve
esaslar doğrultusunda sona erdirilmediği sürece yürürlükte kalmaya devam
edecektir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">1.2.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Sözleşme’nin
konusu, işbu Sözleşme’yi imzalayan gerçek ya da tüzel kişinin Şirket’e ait
mobil uygulama ve/veya internet sitesi üzerinden talep ettiği ürün ve/veya
hizmetlerin satışı veya alımı ile teslimi hakkında 6502 sayılı Tüketicilerin
Korunması Hakkındaki Kanun ve diğer sair mevzuat hükümleri gereğince tarafların
hak ve yükümlülüklerinin saptanmasıdır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">1.3.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket’in
sahibi “Altunizade Mah. Üniversite Sk. No:8 Üsküdar/İSTANBUL” adresinde
yerleşik olan </span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Talento Sound Eğitim ve
Danışmanlık Hizmetleri Ticaret Limited Şirketi</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">’dir. Şirket internet
sitesi ve/veya mobil uygulama üzerinden sunulan Ürün ve/veya Hizmetler
Danışman’lar tarafından sağlanmakta olup Şirket, 6502 sayılı Tüketicinin
Korunması Hakkında Kanun ve 6563 sayılı Elektronik Ticaret Düzenlenmesi
Hakkında Kanun kapsamında mesafeli sözleşme kurulmasına aracılık eden ve&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">“Aracı Hizmet Sağlayıcı”</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;sıfatını haizdir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">1.4.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket işbu
Üyelik Sözleşmesi’nde belirtilen koşulları, aracılık hizmetlerinin
sürekliliğini sağlama, ileride doğacak teknik zaruretler veya mevzuata uyum
sağlanması amacıyla, Danışan aleyhine olmamak kaydıyla ve tek taraflı olarak
her zaman ve herhangi bir ihbarda veya bildirimde bulunmadan değiştirme ya da
tadil etme hakkına sahiptir. Şirket, herhangi bir değişiklik olması halinde
güncel kullanım şartlarını aynı link altında yeni tarih güncellemesi ile
internet sitesinde yayınlayacak, gerek görmesi halinde elektronik posta veya
mobil bildirim ile Danışan’a bildirecek ve onayına sunacaktır. Yenilenmiş
güncel Sözleşme, internet sitesinde yayınlandığı tarihten itibaren geçerli
olacak ve internet sitesinin veya hizmetlerinin kullanımı o andan itibaren yenilenmiş
Sözleşme şartlarına tabi olacaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">1.5.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Danışan, işbu
Sözleşme’de yer alan düzenlemeleri kabul ettiğini ve sağladığı bilgilerin
doğruluğunu onayladığını kabul, beyan ve taahhüt eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Tanımlar</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Sözleşme&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">İşbu Üyelik
Sözleşmesi’ni ifade etmektedir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Şirket
/ EBA&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
:&nbsp;Talento Sound Eğitim ve Danışmanlık Hizmetleri Ticaret Limited Şirketi</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Danışan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket
üzerinde, oluşturduğu hesap ile Şirket‘in sadece aracı sıfatıyla hareket ettiği
Şirket üzerinden satışa sunulan Ürünler’i ve/veya Hizmetler’i alan Üyelik
Sözleşmesi’nde belirtilen koşullar dâhilinde Şirket’e üye olmuş gerçek veya
tüzel kişileri ifade eder. Üyeler bundan böyle “Danışan” olarak anılacaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Danışman&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket
üzerinde, oluşturduğu hesap ile&nbsp;</span><span lang="TR"><a href="https://kidolog.com/"><span style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">talentosound.</span></a></span><span class="MsoHyperlink"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:
&quot;Segoe UI&quot;;color:#007BFF">com.tr</span></span><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349"> alan kodunda yer alan sitede veya Şirket
mobil uygulaması aracılığıyla Ürün ve/veya Hizmetler’i doğrudan sunan kişiler
anlamına gelmektedir. Uzmanlar, bundan böyle “Danışman” olarak anılabilecektir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Ziyaretçi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket’e erişen
her gerçek veya tüzel kişiyi ifade eder. Ziyaretçi tanımı, Danışan ve Danışman
tanımlarının tamamını kapsamaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">İnternet
Sitesi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Tüm hakları
Şirket’e ait olan&nbsp;</span><span lang="TR"><a href="https://kidolog.com/"><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">talentosound.</span></a></span><span class="MsoHyperlink"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:
&quot;Segoe UI&quot;;color:#007BFF">com.tr</span></span><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349"> alan adında ve bu alan adına bağlı alt
alan adlarından oluşan, Şirket’in Danışman’ın Ürünler’ini ve Hizmetler’ini
satışa sunabilecekleri, Danışan’ların ise bu Ürünler’i ve/veya Hizmetler’i
alabilmelerine imkan sağlayan platform Hizmetleri’nin sunulduğu internet
sitesidir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Mobil
Uygulama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Tüm hakları
Şirket’e ait olan, cep telefonu, tablet ve benzeri taşınabilir cihazlarda
çalışan yazılımdır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Talentomeet&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
:&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">Tüm hakları Şirket’e ait olan, Danışmanlar ile yapılacak
görüşmelerin gerçekleşmesine aracılık eden platformu ifade eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Arayüz&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
:&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">İçerikler’in Ziyaretçiler tarafından görüntülenebilmesi ve
Şirket Veritabanı’ndan sorgulanabilmesi amacıyla Ziyaretçiler tarafından
kullanılan; 5846 sayılı Fikir ve Sanat Eserleri Kanunu (FSEK) kapsamında
korunan ve tüm fikri hakları Şirket’e ait olan, Şirket üzerinden yapılabilecek
her türlü işlemin gerçekleştirilmesi için bilgisayar programına komut veren
internet sayfalarıdır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Veritabanı&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">İçerikler’in
depolandığı, tasnif edildiği, sorgulanabildiği ve erişilebildiği ve mülkiyeti
Şirket’e ait olan ve 5846 sayılı Fikir ve Sanat Eserleri Kanunu gereğince
korunan veriler bütünü ve bu verilerin okunabilmelerini sağlayan sistemdir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Üyelik
Denetimi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket
bünyesine Danışan olmak maksadıyla yapılan başvuruları inceleyip karara
bağlayan, inceleyen, denetleyen, Şirket bünyesi içerisinde, Şirket’e ait bir iç
birimdir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Hizmetler&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket
üzerinden Danışan ve Danışman’ın Kullanım Koşulları ve Üyelik Sözleşmesi’nde
tanımlı olan işlemleri gerçekleştirmelerini sağlamak amacıyla, Şirket
tarafından sunulan veya ileride sunulacak olan her türlü ürün ve hizmetleri
kapsamaktadır. Bu kapsamda ancak bununla sınırlı olmamak üzere, Şirket
üzerinden, ebeveyn ve kanunen yetişkin sayılan kişilere psikoloji, çocuk
gelişimi uzmanlığı ve özel eğitim gibi alanlarda danışmanlık hizmetleri
Danışman’lar tarafından verilecek olup Danışman’lar tarafından verilecek
Hizmetler’e Şirket sadece ve yalnızca aracılık etmektedir. Şirket, sağlanan
Hizmet’te Aracı Hizmet Sağlayıcısı sıfatındadır. Şirket, Sözleşme kapsamında
yer alan nedenlerin varlığı ve/veya koşulların gerçekleşmesi halleri ile yasal
mevzuat dahilinde gereklilik arz etmesi durumlarında dilediği zaman ve hiçbir
bildirimde bulunmaksızın Hizmetler’in tanımını değiştirme, Hizmetler’i üçüncü
kişilerin kullanımına kapatabilme hakkına sahiptir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Ürün&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
:&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">Şirket’in sadece aracılığını yaptığı ve Şirket üzerinden
Danışman’lar tarafından Kullanım Koşulları, Üyelik Sözleşmesi ve eklerine uygun
olarak satışa sunulan ürün ve/veya hizmetleri ifade eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Hizmet
Bedeli &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışan
tarafından Şirket’e ödenecek bedeli ifade eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349;background:red;
mso-highlight:red">KULAKLIK İÇİN DEPOZİTO BİLGİSİ EKLEMEK GEREKİYOR</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Ödeme
Hizmet Sağlayıcı&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket’in sözleşmesel
ilişki içinde olduğu 6493 sayılı Ödeme ve Menkul Kıymet Mutabakat Sistemleri,
Ödeme Hizmetleri ve Elektronik Para Kuruluşları Hakkında Kanun’un 13.maddesine
göre 5411 sayılı Kanun kapsamındaki bankalar, elektronik para kuruluşları ve
ödeme kuruluşları ödeme hizmeti sağlayıcılarıdır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Genel Hükümler ve Hizmetler</span></strong><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">3.1.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Hizmetler; (i)
Danışmanlar’ın, Ürün ve/veya Hizmet’lerini sunabilecekleri, Danışan’ların ise
Ürünler ve/veya Hizmetler’i alabilecekleri bir platformun sağlanması ve (ii)
Danışmanlar’ın bu kapsamda ancak bununla sınırlı olmamak üzere, Şirket
üzerinden, ebeveyn ve kanunen yetişkin sayılan kişilere psikoloji, çocuk
gelişimi uzmanlığı<span style="mso-spacerun:yes">&nbsp; </span>ve özel eğitim gibi
alanlarda danışmanlık yapmaları (iii) Danışan tarafından yapılan ödemelerin,
ilgili Ürün ve/veya Hizmet’in Danışan tarafından alınmasını takiben sadece ve
yalnızca Danışman adına ve hesabına alınan bedelin Danışman’a Şirket ile
sözleşmesel ilişkisi kapsamında aktarılmasının sağlanmasıdır. Bu noktada,
Danışan, Şirket tarafından sağlanan Hizmet’in gizlilik politikası kapsamında
sınırlarını bilmemekte olduğunu, sağlanan Hizmet’in ayıplı olması halinde
sadece ve yalnızca Ürün ve/veya Hizmet sağlayıcısı olan Danışman’ın sorumlu
olduğunu, Danışman ile Şirket arasında 4857 sayılı İş Kanunu’na tabi bir iş
ilişkisinin bulunmadığını, Şirket’in her zaman Aracılık Hizmeti’ni sona erdirme
hakkına haiz olduğunu, Şirket’in hiçbir zaman Ürün ve/veya Hizmetler’in
kalitesinden sorumlu olmadığını, kabul ve beyan eder. Bu kapsamda, Şirket,
sağlanan Hizmet’in içeriğini kontrol etme yükümlülüğü bulunmamaktadır.
Danışan’ın, sağlanan Hizmet’in ayıplı olduğu kanaatinde olması halinde durumu
Şirket’e bildirir, Şirket sağlanan Hizmet’in vaat edilenden farklı, ayıplı,
noksan çıktığını tespit etmesi halinde Danışan tarafından ödenen bedeli iade
eder. Danışan bunlar dışında Hizmet’in ve/veya Ürün’ün vaat edilenden farklı,
ayıplı, noksan çıksın ya da çıkmasın 6502 sayılı Tüketicinin Korunması Hakkında
Kanun ve 6563 sayılı Elektronik Ticaret Düzenlenmesi Hakkında Kanun nezdinde 14
(on dört) gün içerisinde ürünü geri göndermek suretiyle bedelin iadesini talep
edebilir ve bu durumda Danışan tarafından gönderilen bedel Danışan’a iade
edilir. 14 (on dört) günlük süre, mal teslimine ilişkin sözleşmelerde, malın
teslim alındığı gün, hizmet ifasına ilişkin sözleşmelerde ise sözleşmenin
kurulduğu gün başlar. Ancak Danışan, sözleşmenin kurulduğu an ile malın teslimi
arasında da cayma hakkını kullanabilir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">3.2.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket, 6502
sayılı Tüketicinin Korunması Hakkında Kanun ve 6563 sayılı Elektronik Ticaret
Düzenlenmesi Hakkında Kanun kapsamında mesafeli sözleşme kurulmasına aracılık
eden ve&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">“Aracı Hizmet Sağlayıcı”</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;sıfatını
haizdir. Danışman’lar tarafından sağlanan Ürün ve/veya Hizmet’lerde, Şirket
sadece ve yalnızca Aracı Hizmet Sağlayıcı sıfatına haiz olup Ürün ve/veya
Hizmet sunulan elektronik ortamı kullanan Danışman’lar tarafından sağlanan
içerikleri kontrol etmek, bu içerik ve içeriğe konu mal veya hizmetle ilgili
hukuka aykırı bir faaliyetin ya da durumun söz konusu olup olmadığını
araştırmakla yükümlü değildir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">3.3.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket,
Danışman’ların Şirket üzerinden sağladıkları Hizmet ve/veya Ürünler’in
listelenmesi, Danışan’lar tarafından Hizmet ve/veya Ürünler’in bedelinin
ödenmesini takiben Danışan tarafından ödenen bedellerin ilgili Danışman’a
sözleşme ilişkisi kapsamında aktarılmasını sağlamaktadır. Bu kapsamda,
Danışman’lar, Şirket’in Danışman namına satışa sunulan Ürünler’in ve/veya
sağlanan Hizmetler’in bedelini tahsile yetkili olduğunu kabul ve taahhüt
ederler. Danışan’lar, Şirket vasıtası ile ödeme yaparak Danışman’lar ile
kurdukları sözleşme ilişkisi kapsamındaki ödeme yükümlülüklerini ifa etmiş
olurlar. Bu kapsamda Danışan, Şirket’in Danışman tarafından verilen Hizmet
ve/veya sağlanan Ürün karşılığında yapılacak ödemelerin ilgili Ürün ve/veya
Hizmet’in Danışan tarafından teslim alınmasını takiben Danışman’ın hesabına
aktarılması hususunda yetkili olduğunu ve de Hizmetler ve/veya Ürünler
karşılığında bedel ödemekle yükümlü olacağını, peşinen kabul ve taahhüt eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">3.4.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Danışan, Şirket
ürün ve hizmetlerinden faydalanabilmesi için gerekli olan veya ilgili mevzuat
kapsamında gerekli kılınan bilgileri sağlaması gerektiğini, bu bilgilerin
sağlanmaması halinde Şirket ürün ve hizmetlerinden yararlanamayacağını kabul
eder. Danışan, sağladığı bilgilerin hukuka uygun bir biçimde elde edildiğini ve
açık rızası kapsamında Şirket ile paylaşıldığını kabul, beyan ve taahhüt eder.
Danışan, bilgileri sağlamanın yanında bu bilgileri güncel tutmakla da
yükümlüdür.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">3.5.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket
Ürün ve/veya Hizmetleri kapsamında gerçekleştirilebilecek işlemler, ürün ve
hizmetlerin satıcısı/sağlayıcısı konumundaki ve gelecekteki yapacağı anlaşmalar
doğrultusunda güncellenebilecek, arttırılıp azaltılabilecektir. Bu hususta
takdir ve değişiklik yetkisi münhasıran Şirket’e aittir. Danışan, Şirket’in
dilediği değişiklikleri ürün ve hizmetler üzerinde yapabileceğini ve Şirket’in
bu kapsamda meydana gelebilecek zararlardan hiçbir şekilde sorumlu olmadığını
kabul eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">3.6.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Mobil Uygulama
ve/veya İnternet Sitesi içerisinde gerçekleşebilecek ödeme işlemlerinin
sisteminin arızalanması, kısmen veya tamamen çalışmaz duruma gelmesi, mücbir
sebep veya beklenmeyen haller vb. nedenlerle Şirket’in sebep olmadığı veya
zarar ile illiyet bağı olsa ile Şirket’in kusurlu olmadığı durumlarda; ücret
iadesi yapılmaz. Ancak, Danışan’a başka bir tarihe aynı bedelle randevu imkanı
tanınır. Şirket, müşteri memnuniyetinin sağlanması adına haklarını saklı tutar.
Şirket tarafından veya Şirket’in anlaşmalı olduğu üçüncü kişiler tarafından
gerçekleştirilen ve Mobil Uygulama ve/veya İnternet Sitesi üzerinde yapılan
onarım ve güncelleme gibi durumlarda da Şirket, doğmuş ve doğabilecek zarar ve
kayıplardan ötürü sorumlu tutulamaz. Mevcut randevunun işbu döneme rastlaması
halinde, Danışan’a aynı bedelle başka tarihe ilişkin randevu imkanı tanınır.
Danışan, Mobil Uygulama’da ve/veya İnternet Sitesi’nde yapılacak iyileştirme ve
diğer değişikliklerin uygulanması için Mobil Uygulama’ya ve/veya İnternet Sitesi’ne
erişimin geçici olarak engellenebileceğini kabul eder. Yine aynı kapsamda
Danışan; gerek uygulamada gerek cihaz yazılım güncellemelerinin en son
versiyonunun kullanmadığı durumlarda (güncellemelerin gerçekleştirilmediği
hallerde) veya herhangi bir cihaz kaynaklı erişim sıkıntısı yaşanabilen
hallerde Mobil Uygulama’dan ve/veya İnternet Sitesi’nden gerekli verimi
alamaması, kesintiler olması, teknik aksaklıklar yaşaması ve benzeri haller
sebebiyle, mevcut randevusunun işbu döneme rastlaması halinde, Danışan’a aynı
bedelle başka tarihe ilişkin randevu imkanı tanınır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">3.7.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Üyelik
Sözleşmesi, Kullanım Koşulları ve eklerine aykırılık hallerinde Şirket’in maddi
ve manevi zararının tazminini talep hakkı saklıdır. Üyelik Sözleşmesi, Kullanım
Koşulları ve ekleri Şirket’in herhangi bir sebeple önceden bilgilendirmek
suretiyle yayınının durması/durdurulması halinde bu süre boyunca askıda
sayılır. Bu süreçte askıda kalan satış ve/veya hizmet işlemleri için Danışan
tazmin talebinde bulunamaz. Danışan ve Danışman arasında söz konusu herhangi
bir uyuşmazlıkta, uyuşmazlığa ilişkin Şirket’in husumetinin bulunmaması
nedeniyle Şirket taraf olarak gösterilemeyeceğini, Danışan, kabul ve beyan
eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">3.8.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Danışan
tarafından yapılan ödemeler, sadece ve yalnızca Danışman adına ve hesabına
Şirket tarafından tahsil edilmekte olduğunu, Danışan, kabul ve beyan eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">3.9.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Danışman ile
Şirket arasında, 4857 sayılı İş Kanunu’na tabi bir iş ilişkisinin
bulunmamaktadır. Şirket sadece ve yalnızca Danışan ile Danışman arasında
yapılacak Hizmet’in aracılığını gerçekleştirmektedir. Bu doğrultuda,
gerçekleştirilecek Hizmetler’de, Gizlilik Politikası uyarınca, Şirket hiçbir
suretle Danışman’ın verdiği Hizmet’i denetleyemeyeceğinden ve/veya denetlemesi
beklenemeyeceğinden, Hizmet’in kalitesine ilişkin sorumluluğu bulunmadığını,
Danışan, kabul ve beyan eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">3.10.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket, hiçbir
suretle bildirim yapmaksızın ve/veya öncesinde bilgilendirme yapma zorunluluğu
bulunmaksızın, her zaman Aracılık Hizmeti’ni sona erdirme hakkına sahiptir.
Sona erdirmenin gerçekleştiği andan öncesinde satın alınmış ancak henüz
gerçekleşmemiş/teslim edilmemiş Ürün ve/veya Hizmetler derhal Danışan’a iade
edilir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">3.11.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket, Ürün
ve/veya Hizmetler’deki herhangi bir değişikliği İnternet Sitesi’nde ve/veya
Mobil Uygulaması’nda yapacağı ilanla değiştirme veya kaldırma hakkına sahiptir.
Danışan, Ürün ve/veya Hizmetler’deki değişikliğe veya kaldırılmasına ilişkin
talep ve/veya itirazlarını 15 gün içerisinde iletisim@talentosound.com Şirket
yetkili mail adresine iletme hakkına sahiptir. Talep ve/veya itirazlara ilişkin
değerlendirme hakkı yalnızca ve sadece Şirket’e aittir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">3.12.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Üyelik
Sözleşmesi, Hizmetler’in sona erdirilmesi halinde kendiliğinden sona erer. Şu
kadar ki, Şirket işini, ticari ortaklığını ve alan adını da değiştirmeye, aynı
faaliyeti başka bir alan adı üzerinden yürütmeye yetkili olup bu
değişikliklerin Üyelik Sözleşmesi’ne herhangi bir etkisi olmayacaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Üyelik Sistemi</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.1.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">İşbu Üyelik
Sözleşmesi; Şirket ile Hizmetler ve Ürünler’den yararlanmak isteyen Danışan
arasında geçerli olup üyelik için gereken hüküm ve şartları belirlemektedir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.2.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Danışan,
Ürünler’i satın almak ve/veya Hizmet’lerden faydalanmak maksadı ile kendilerine
ait bir profil sayfası oluşturmakla yükümlüdür. Bu profil sayfasının
oluşturulmasında Danışan, kendilerinden talep edilen kendilerine ait bilgileri
(isim, soy isim, telefon, T.C. kimlik numarası, adres, e-posta, banka hesap
bilgisi, vs.) ilgili yerlere gireceklerdir. Danışan’ın kullanıcı adı seçiminde,
genel ahlak kurallarına uygun ve telif hakkı, marka veya ticari unvanları ihlal
eden bir durum taşımaması gerekmektedir. Danışan tarafından verilen bilgilerden
bazıları Hizmetler’de kullanılmak üzere talep edilmekte olup profil sayfasında
gözükmeyecektir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.3.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışan,
üyelik bilgileri ile kendisine ait diğer kişisel verilerin, 6698 sayılı Kişisel
Verilerin Korunması Kanunu ve ilgili mevzuat kapsamında Veri Sorumlusu sıfatı
ile Danışan tarafından işlenmesine&nbsp;</span><span lang="TR"><a href="https://kidolog.com/sozlesmeler/aydinlatma-metni"><span style="font-family:
&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">Aydınlatma Metni</span></a></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;kapsamında
muvafakat vermiş olup bu verilerin işlendiğini bilir ve kabul eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.4.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket,
akdedilen sözleşmelere aykırılık ve yasal mevzuata aykırılık halleri, teknik
güncelleme durumları ve/veya profil sayfalarının iyileştirilmesine ilişkin
faaliyet hallerinde ve bununla sınırlı olmamak kaydıyla gerekli görülen
hallerde Danışan’ın aleyhine olmamak üzere, ayrıca herhangi bir bildirimde
bulunmaksızın profil sayfalarında değişiklik yapma hakkı her zaman saklıdır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.5.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Danışan, profil
sayfasında yer alsın veya almasın, Danışman’lara ilettiği ve/veya görüşme
sırasında belirttiği, Şirket’e verdiği, bilgilerin doğru ve eksiksiz olduğunu
kabul, beyan ve taahhüt eder. Bu bilgilerin eksik verilmesinden kaynaklanan
herhangi bir zarardan Şirket’in sorumlu olması söz konusu olamaz. Şirket’in
zararlara ilişkin talep, tazminat hallerinde hukuki ve cezai hakları saklıdır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.6.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">İşbu Üyelik
Sözleşmesi’ni kabul etmekle;</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo1;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Gerçek kişi Üyeler; 18 yaşından büyük
     olduklarını ve sözleşme yapmak için gereken fiil ehliyetine sahip
     olduklarını,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo1;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Tüzel kişi Üyeler ise Üyelik
     Sözleşmesi’nin yetkili kişiler tarafından kabul edildiğini ve tüzel kişi
     için bağlayıcı olduğunu,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo1;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Gerçek ve tüzel kişi Üyeler, Talento
     Sound tarafından herhangi bir sebeple üyelikten geçici veya sürekli olarak
     uzaklaştırılmadıklarını,</span></li></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">peşinen kabul ve beyan
ederler. Ayrıca Danışan, Üyelik Sözleşmesi’ni kabul ederek İnternet Sitesi’nde
sağlanan Hizmetleri kullanmaya, Şirket’e giriş yapmaya yetkili olduğunu, Hizmet
seçiminde ve kullanımında ve Şirket’e girişinde her türlü sorumluluğu üstlendiğini
kabul, beyan ve taahhüt eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.7.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">18 yaşından
küçük kişiler Şirket’e Üye olamazlar ve Şirket’in ve/veya Danışmanlar’ın
sağladığı Ürün ve/veya Hizmetler’den faydalanamazlar. Üyeler’in 18 yaşından
küçük olduğunu tespiti halinde üyelik işbu Üyelik Sözleşmesi hükümlerine
aykırılık sebebiyle derhal ve ayrıca herhangi bir bildirimde yapılma
zorunluluğu olmaksızın sona erdirilir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.8.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Üye kabulünde
takdir yetkisi yalnızca ve sadece Şirket’e aittir. Üyelik başvurusu Şirket
tarafından değerlendirilecek olup Şirket herhangi bir gerekçe göstermeye gerek
duymadan, bilgilendirme ile üyelik taleplerini geri çevirme hakkına sahiptir.
İlgili başvurular “Üyelik Denetim” birimi tarafından değerlendirilecek olup
Üyelik Denetim Birimi, Şirket’e ait bir şirket iç birimidir. Ayrıca, herhangi
bir başvurunun Şirket, Üyelik Denetim Birimi tarafından reddedilmesi halinde,
üyelik başvurusunda bulunan kişinin yazılı talebi üzerine vermiş olduğu kişisel
veriler 15 (on beş) gün içerisinde imha edilecek olup imhanın gerçekleştiği
günden itibaren en geç 15 (on beş) gün içerisinde başvurucuya bildirilecektir.
Şirket kullanılmayan üyelikleri geçersiz kılma hakkını haizdir. Üyelik
işlemleri tamamlandıktan sonra, Şirket, üyeliği geçici olarak veya sürekli
olarak durdurmak, iptal etmek, ayrıca sınırlı olmamakla birlikte, hüküm ve
koşullara aykırılık, mevzuat dahilinde ihlal durumlarında hiçbir neden
göstermeksizin Hizmet vermeyi kesmek hakkını haizdir. Danışan, dilediği zaman
görüştüğü Danışman’ı değiştirebileceği gibi dilediği zaman da tamamen sistemden
ayrılma hakkına da sahiptir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.9.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Üyelik
Şirket’in ilgili bölümünden Üye olmak isteyen Ziyaretçiler tarafından İnternet
Sitesi’ne üye olmak için gerekli olan üyelik formunun doldurulması, kimlik
bilgilerinin verilmesi, gerek görülmesi halinde kimlik bilgilerinin
doğruluğunun onaylanması, üyelik formunda verilen bilgilere göre yararlanılmak
istenilen hizmetler arasında ücretli bir hizmetin varlığı halinde bu hizmete
ilişkin olarak varsa öncül ücretin ödenmesi ve banka bilgileri ve benzeri ödeme
ve hesap bilgilerinin verilmesi suretiyle kayıt işleminin yaptırılması ile
tamamlanır. Daha sonrasında Danışman ve/veya Danışanlar tarafından oluşturulan şikâyete
istinaden ve bununla sınırlı olmamak kaydıyla herhangi bir şekilde Sözleşme’ye
aykırılığının bulunup bulunmadığı gibi hususlarda Üyelik Denetim Birimi
tarafından incelenebilir. Üyeler, banka ve benzeri ödeme ve hesap bilgilerini
İnternet Sitesi’nin ilgili bölümlerine girmemeleri ve ödemeyi
gerçekleştirmedikleri taktirde Danışman’lardan hizmet alamayacaklarını peşinen
kabul, beyan ve taahhüt ederler. Şirket ile paylaşılan kişisel veriler, 6698
sayılı Kişisel Verilerin Korunması Kanunu (“KVKK”) kapsamında işlenmektedir.
Kişisel verilere ilişkin daha fazla bilgi edinmek için lütfen İnternet
Sitesi’nde ve/veya Mobil Uygulaması’nda yer alan&nbsp;Kişisel Verilerin
İşlenmesine İlişkin&nbsp;</span><span lang="TR"><a href="https://kidolog.com/sozlesmeler/aydinlatma-metni"><span style="font-family:
&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">Aydınlatma
Metni’ni</span></a></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">&nbsp;inceleyiniz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.10.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Üyeliğe ilişkin
kullanım hakları, kullanıcı adı ve şifresi başkalarına devredilemez. Danışan,
üyelik bilgileri dahil olmak üzere beyan etmiş olduğu tüm bilgilerin kullanım
ve yönetiminden bizzat sorumludur ve bu bilgilerin kendisi tarafından ya da
aracılığıyla üçüncü taraflarca kullanılmasına izin vermeyecektir. Danışan,
almış olduğu Ürün ve/veya Hizmet’in görülmesi sırasında Şirket&nbsp;</span><span lang="TR"><a href="https://kidolog.com/sozlesmeler/gizlilik-politikasi"><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">Gizlilik
Politikası’na</span></a></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">&nbsp;uygun davranacağını kabul, taahhüt ve beyan eder. Aksi hal
ve davranışı sergilenmesi halinde, Şirket’in her türlü hakkı saklıdır. Danışana
ait üyelik bilgisi ve şifre ile gerçekleştirilen her işlem bizzat Danışan
tarafından gerçekleştirilmiş kabul edilecektir. Danışan, mevcut üyeliğini
üçüncü kişilere devredemez, kullanımına açamaz. Danışanın mevcut üyeliğini
bizatihi kendisinin kullanmadığının Şirket tarafından tespit edilmesi halinde,
Şirket haklı neden ve ihbarda bulunmaksızın derhal fesih hakkına sahip olup
Şirket’in hukuki ve cezai tüm hakları saklıdır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.11.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Danışan,
kendisine ait kullanıcı adı ve şifre bilgilerini korumakla yükümlüdür. Danışan,
tek bir Danışan hesabı tesis etme hakkına sahip olup Danışan hesabının Şirket
tarafından askıya alınması veya sona erdirilmesini takiben Danışan tarafından
aynı veya başka bilgiler kullanılarak ikinci bir hesap tesis edilmesi yasaktır.
Şirket, işbu yasağın ihlal edildiğini tespit etmesi halinde, yeni açılan hesap
kalıcı olarak kapatılacak ve ihlali gerçekleştiren Danışan ile aksi
kararlaştırılıncaya kadar tekrardan Sözleşme akdedilmeyecektir. &nbsp;Danışan,
kendisine ait bu bilgileri üçüncü şahıslara açıklayamaz ve üçüncü şahısların
kullanımına sunamaz. Danışan, kendisine ait bu bilgilerin izinsiz
kullanıldığını öğrenirse durumu derhal Şirket’e bildirmeyi taahhüt eder.
Şirket, izinsiz kullanımı engellemek amacıyla Danışan’ın Şirket’e erişimini
engelleme ve/veya üyeliğini sona erdirme ve/veya askıya alma hakkına sahiptir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.12.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışan
olan herkes, kullanıcı adı ve şifresini korumakla yükümlüdür. Oluşabilecek
kusurlu davranışlardan Şirket sorumlu değildir. Danışan, hesap bilgilerinin
gizliliğini ve güvenliğini sağlayamaması sonucunda başka bir Danışan’a veya
Danışman’a, şifre veya hesabının başkası tarafından kullanılması nedeniyle
Şirket’in ve/veya Ziyaretçiler’in uğrayacağı zararlardan sorumludur.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.13.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışan,
hiçbir gerekçe altında, herhangi bir yöntem kullanarak, kendisine veya diğer
Danışan’a ve/veya Danışmanlar’a ait profil sayfalarını manipüle edecek
davranışlarda bulunamaz. Danışan, bu ve benzeri davranışlarda bulunması
halinde, Şirket’in tüm zararını tazmin edeceğini ve Şirket’in tek taraflı
olarak ayrıca bir ihbarda bulunmadan Üyelik Sözleşmesi’ni feshedebileceğini ve
Danışan’ın üyeliğine son verme hakkının bulunduğunu bilir ve kabul eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.14.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışanlar,
profillerinde yayınlanan fotoğrafları ya da profil fotoğraflarının kendilerine
ait olduğunu, Danışmanlar ile paylaştıkları bilgilerin gerçeği yansıttığını,
Danışmanlar ile gerçekleştirdikleri görüşmelerin toplumsal ahlak kurallarına
uygun şekilde olacağını peşinen kabul, beyan ve taahhüt eder. Bu hükme
aykırılık olması halinde Şirket ayrıca bir ihbarda bulunmaksızın ilgili
Danışan’ın üyeliğini iptal etme hakkına sahiptir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Şirket Yetki ve Yükümlülükleri</span></strong><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">5.1.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket
ile paylaşılan kişisel veriler, 6698 sayılı Kişisel Verilerin Korunması Kanunu
(“KVKK”) kapsamında işlenmektedir. Kişisel verilere ilişkin daha fazla bilgi
edinmek için lütfen&nbsp;</span><span lang="TR"><a href="https://kidolog.com/sozlesmeler/aydinlatma-metni"><span style="font-family:
&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">Kişisel
Verilerin İşlenmesine İlişkin Aydınlatma Metni’ni</span></a></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;inceleyiniz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">5.2.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket,
Danışanlar’a sağlanan Ürün ve/veya Hizmet’lerin bilgileri ve/veya yorum ve
öneriler ile bu ürün bilgileri, yorum ve önerilere ilişkin varsa fotoğraflar da
dahil olmak üzere her türlü içeriği, internet ortamında da dahil olmak üzere
her türlü tanıtım materyalinde her şekilde kullanabilir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">5.3.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket,
Veritabanı’nda tutulan Danışan’a ait bilgileri, istatistiki bilgilere
dönüştürmek, reklam ve/veya pazarlama alanında kullanmak, Ziyaretçiler’in genel
eğilimlerini belirlemek, içeriğini ve servislerini bu anlamda Ziyaretçiler’e
daha zengin içerik sunabilmek amacıyla geliştirmek için kullanabilme hakkına
her zaman sahiptir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">5.4.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket, Hizmet
ve/veya Ürün miktarlarını sınırlama hakkını saklı tutar.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">5.5.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket,
Danışmanlar’ın bilgilerinin doğruluğunu, geçerliliğini ve lisansları hakkında
gerçekliğini mümkün olan en yakın şekilde göstermek için çaba sarf eder, ancak
Ürün ve Hizmetler’i sağlayan Danışmanlar’ın bilgilerinin doğruluğu noktasında
hiçbir şekilde taahhütte bulunmamaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">5.6.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket,
Hizmetler kapsamında hiçbir Danışan’a belirli bir amaca uygunluk, kesintisiz
devamlılık, güncelleme, işlevsellik, doğruluk, hatasızlık dahil, açık ya da
zımni hiçbir garanti vermez. Aracılık edilen Ürün ve/veya Hizmetin sosyal ağ ve
fiziki olmayan yollarla gerçekleşmesi sebebi ve diğer sebeplerle bu mecraya
güvenlik açısından Şirket gerekli tüm önlemleri alır ancak, Danışan’a garanti
vermez. Şirket, gerekli gördüğü zamanlarda hizmetleri geçici bir süre askıya
alabilir veya tamamen durdurabilir. Hizmetler’in geçici bir süre askıya
alınması veya tamamen durdurulmasından dolayı Şirket’in, Danışanlar’a karşı
herhangi bir sorumluluğu yoktur.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">5.7.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket,
Danışanlar’a sağlanan Hizmet karşılığında Danışmanlar’a verilecek Hizmet
Bedeli’nde ve/veya işbu aracılık hizmeti gereğince tahsis ettiği Hizmet
Bedeli’nde değişiklik yapabilir. Hizmet Bedeli’ne ilişkin değişiklikler,
değişikliğin ilan edildiği andan itibaren geçerlilik kazanacak ve herhangi bir
kampanyanın bulunması halinde, kampanyanın sona erme tarihine kadar geçerli
olacaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">5.8.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket,
Danışanlar’dan, Danışmanlar adına tahsil edilecek ödemeler dışında, hiçbir
koşul altında Danışanlar’ı ve/veya Danışmanlar’ı temsil etmemektedir. Şirket’in
Danışan ve Danışman arasında ortaya çıkabilecek herhangi bir uyuşmazlık ve
benzeri durumda Danışman ve Danışan arasındaki iletişimi sağlamak da dahil
olmak üzere herhangi bir yükümlülüğü olmadığı gibi, Danışan ve Danışman
arasında herhangi bir uyuşmazlık çıkması halinde Şirket, söz konusu uyuşmazlığa
ilişkin husumeti bulunmamaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">5.9.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket’in
her ne sebeple olursa olsun Danışan ve Danışman arasındaki ilişkiyi düzenleme,
sağlama, kurma veya sair şekilde oluşturma veyahut da hakemlik yapma
yükümlülüğü yoktur. Danışan ve Danışman, aralarındaki hizmet ve/veya satış
ilişkisinden bizzat ve şahsen sorumludur. Danışan ve Danışman, Şirket’in bu
konuda herhangi bir sorumluluğu bulunmadığını peşinen kabul ve beyan ederler.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Danışan’ın hak ve yükümlülükleri</span></strong><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6.1.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışan,
Şirket’te yayınlanan kurallara uygun olarak Hizmetler’den faydalanmayı kabul ve
taahhüt etmiştir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6.2.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışanlar,
Şirket üzerinde yalnızca hukuka uygun işlemler yapabilirler. Danışan’ın,
Şirket’te yaptığı her işlem ve eylemdeki hukuki ve cezai sorumluluk bizzat ve
sadece kendilerine aittir. Bu kapsamda Danışanlar, yapacakları tüm işlemde
yürürlükteki mevzuata riayet edeceklerini ve mevzuatın düzenlemiş olduğu tüm
sorumlulukların kendilerine ait olduğunu kabul ve beyan eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6.3.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışan,
yürürlükte olan mevzuatın yüklediği sorumlulukları bilmedikleri veya
bilebilecek durumda olmadıklarını ileri süremez. Danışan, Danışmanlar’dan
aldıkları Ürün ve/veya Hizmetler sırasında kanuna aykırı eylem ve davranışlarda
bulundukları veya bulunacaklarını ifade etmeleri ve/veya kanaat uyandırmaları
halinde, Danışmanları’nın ve Şirket’in işbu durumu yetkili idari ve adli
mercilere bildirebileceklerini kabul eder ve kanuna aykırılık nedeniyle yapılan
ihbar/şikayet sebebiyle Şirket ve/veya Danışmanlar’ın sorumluluğu bulunmamakta
olduğunu bilir, işbu husus sebebiyle gizliliğin ihlal edildiğini ileri süremez.
Danışan, işbu kanuna aykırı eylem ve davranışıyla bağlantılı olarak Şirket’in
şikayeti ve/veya bilgi temini sonucu zarara uğraması durumunda, Şirket’i hiçbir
sıfatla sorumlu tutmamayı, Şirket’ten tazminat talep etmemeyi kabul ve taahhüt
eder. Şirket, sağlanan veya sağlanmamasına rağmen Şirket’in bulunduğu bilişim
sistemlerine Danışan tarafından herhangi bir şekilde girilen herhangi bir bilgi
veya veri sebebi ile bir hukuki veya cezai sorumlulukla karşılaşması halinde,
Danışanlar’ın hukuka aykırı işlemlerde bulunmaları ve bununla sınırlı olmamak
kaydıyla diğer hukuki ve cezai sonuç doğuran işlemlerinde, Şirket, Danışan’a
rücu hakkını saklı tutar.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6.4.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışanlar’ın
Danışmanlar’dan aldıkları Ürün ve/veya Hizmetler sırasında, Danışmanlar’a karşı
kanuna aykırı eylem ve davranışlarda bulundukları taktirde, Şirket, işbu
Sözleşme ilişkisini derhal ve bildirimsiz olarak feshedebilir, önceden satın
alınan Ürün ve/veya Hizmetler’e ilişkin iade yapmayabilir, diğer tüm haklarını
da ayrıca saklı tutar. Danışan’ın işbu Sözleşmeyi ihlal ettiğinin tespit
edilmesi halinde ya da durumun gerektirdiği ölçüde hiçbir sebep göstermek
zorunda olmaksızın, Şirket, Mobil Uygulama’yı ve/veya İnternet Sitesi’ni
kullanmaktan ve üyelik haklarını erişimden menedebilir, üyeliğini askıya
alabilir, geçici olarak kullanımı durdurabilir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6.5.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Danışan,
Şirket’in sağladığı hizmetlerin sunulması için gerekli olan veya ilgili
mevzuatlar kapsamında gereklilik arz eden bilgileri sağlaması gerektiğini, bu
bilgilerin sağlanmaması veya güncel tutulmaması halinde Şirket hizmetlerinden
yararlanamayacağını kabul eder. Danışan, sağladığı bilgilerin hukuka ve
mevzuata uygun bir biçimde elde edildiğini ve açık rızası kapsamında Şirket ile
paylaşıldığını kabul, beyan ve taahhüt eder. Danışan, bilgileri sağlamanın
yanında bu bilgileri güncel tutmakla da yükümlüdür.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6.6.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Danışanlar,
Danışmanlar ve Ziyaretçiler, Şirket’in ilgili bölümlerine girilen hiçbir
bilgiyi kontrol etmekle yükümlü olmadığını ve kendisine verilen bilgilerin
doğruluğunu hiçbir koşul altında taahhüt etmediğini peşinen kabul, beyan ve
taahhüt eder. Bununla birlikte Ziyaretçiler, Hizmetler’in talep edilen şekilde
verilebilmesi için Şirket’e ve/veya Danışmanlar’a kendilerine ait, gerçek ve
eksiksiz bilgileri vermekle yükümlü olduklarını; aksi takdirde, satın aldıkları
Hizmet ve/veya Ürünler’in verdikleri adrese ulaşması veya Hizmet’in
sağlanamaması da dahil olmak, ancak bununla sınırlı olmamak üzere çeşitli
sorunların doğabileceğini kabul ederler. Bu kapsamda, Ziyaretçiler Şirket
üzerinden ve/veya Danışmanlar tarafından kendilerinden talep edilen bilgileri
tam, doğru ve gerçeğe uygun şekilde vermekle yükümlü olup söz konusu bilgileri
yanlış vermelerinden dolayı oluşan zararlardan Şirket’in sorumluluğu
bulunmamakla birlikte, Şirket’in her türlü zararını Danışan, karşılamakla
yükümlüdür.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6.7.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Danışan bedeli
ödeyerek satın aldığı Hizmet’i, randevu saatinden 3 saat öncesinde Şirket’e
yazılı bildirimde bulunup Şirket tarafından iptalin onaylanması ile Hizmet’in
iptalini sağlayabilir. Şirket, her türlü hakkı saklı kalmakla birlikte,
Danışan’ın haklı nedeni olmaksızın 3 kez ayrı ayrı randevusunu kusuru ile iptal
etmesi halinde, Danışan’a Hizmet vermeyebilir, üyeliğini sonlandırabilir,
üyeliğini dondurabilir. Bu takdirde, Danışan, Şirket’in herhangi bir zararı
oluşması halinde tüm zararını karşılamakla yükümlü olacağını, peşinen kabul ve
taahhüt eder. Danışan, randevu saatine geç kalınmasının veya cevapsız
bırakılmasının sorumluluğu münhasıran kendisinde olduğunu, ek süre
isteyemeyeceğini kabul, taahhüt ve beyan eder. Şirket her zaman randevuyu iptal
etme hakkına sahip olup ücret iadesini en geç 4 gün içinde Danışan’a
gerçekleştirecektir. Şirket İnternet Sitesi’nde ve/veya Mobil Uygulaması’nda
listelendiği halde satışa, randevu saati açısından Şirket ve/veya Danışmanın
kusuru ile sunulamaması veya Danışanın satın aldığı bir Hizmetin randevu saati
itibariyle Danışman’ın veya Şirket’in kusuru ile verilmemesi durumlarında,
Şirket, Danışan’a bilgi vermek kaydı ile hizmetin para iadesi yapılarak iptali
sağlayacaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6.8.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Mobil
Uygulama ve/veya İnternet Sitesi içerisinde gerçekleşebilecek ödeme
işlemlerinin sisteminin arızalanması, kısmen veya tamamen çalışmaz duruma
gelmesi, mücbir sebep veya beklenmeyen haller vb. nedenlerle Şirket’in sebep
olmadığı veya zarar ile illiyet bağı olsa ile Şirket’in kusurlu olmadığı
durumlarda; ücret iadesi yapılmaz. Ancak, Danışan’a başka bir tarihe aynı
bedelle randevu imkânı tanınır. Şirket, müşteri memnuniyetinin sağlanması adına
haklarını saklı tutar. Şirket tarafından veya Şirket’in anlaşmalı olduğu üçüncü
kişiler tarafından gerçekleştirilen ve Mobil Uygulama ve/veya İnternet Sitesi
üzerinde yapılan onarım ve güncelleme gibi durumlarda da Şirket, doğmuş ve
doğabilecek zarar ve kayıplardan ötürü sorumlu tutulamaz. Mevcut randevunun işbu
döneme rastlaması halinde, Danışan’a aynı bedelle başka tarihe ilişkin randevu imkânı
tanınır. Danışan, Mobil Uygulama’da ve/veya İnternet Sitesi’nde yapılacak
iyileştirme ve diğer değişikliklerin uygulanması için Mobil Uygulama’ya ve/veya
İnternet Sitesi’ne erişimin geçici olarak engellenebileceğini kabul eder. Yine
aynı kapsamda Danışan; gerek uygulamada gerek cihaz yazılım güncellemelerinin
en son versiyonunun kullanmadığı durumlarda (güncellemelerin
gerçekleştirilmediği hallerde) veya herhangi bir cihaz kaynaklı erişim
sıkıntısı yaşanabilen hallerde Mobil Uygulama’dan ve/veya İnternet Sitesi’nden
gerekli verimi alamaması, kesintiler olması, teknik aksaklıklar yaşaması ve
benzeri haller sebebiyle, oluşan sorunlardan Şirket’in sorumluluğunun bulunmadığını
kabul ve beyan eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6.9.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Danışan,
Hizmet’i almadan önce, alırken ve aldıktan sonra Kullanım Koşulları, Üyelik
Sözleşmesi ve ekleriyle birlikte yürürlükte bulunan tüm mevzuata uygun
davranmayı, aksi halde karşılaşacağı tüm hukuki ve cezai yaptırımlardan, maddi
ve manevi tazminat taleplerinden kendisinin sorumlu olacağını, Şirket’in hiçbir
şekil ve surette sorumlu tutmayacağını ve Şirket’in üçüncü kişilerin
taleplerine maruz kalması halinde kendisine rücu edebileceğini kabul, beyan ve
taahhüt eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6.10.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Mobil
Uygulama’nın ve/veya İnternet Sitesi’nin kullanıldığı cihazın; tüm
yazılımlarını (işletim sistemi dahil olmak üzere) güncel tutma ve cihazı en
güncel AntiVirüs ve AntiSpyWare programlarıyla yetkisiz erişimlere karşı
koruma, şifre bilgilerine internet üzerinden kendisi dışındaki kişilerin
erişmesini engellemek için cihazın güvenliğini temin etme gibi cihazın yetkisiz
erişimlere karşı güvenliğine ilişkin tüm teknik tedbirlerin alınması münhasıran
Danışan’ın sorumluluğundadır. Böyle bir durumda Danışan, tüm zararlardan
münhasıran sorumlu olacak ve Şirket’e bu kapsamda herhangi bir talep
iletemeyecektir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6.11.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışan,
Mobil Uygulama ve/veya İnternet Sitesi üzerinden ödeme ve sair işlemlerden,
Mobil Uygulama’yı ve/veya İnternet Sitesi’ni kullanmasından ve Mobil
Uygulama’da ve/veya İnternet Sitesi’nde paylaştığı her türlü bilgi ve içerikten
münhasıran sorumlu olup paylaşılan bilginin içeriği ve doğruluğuna bağlı olarak
ortaya çıkan her türlü talep ve zarar hallerinde, Şirket’in, Danışan’a rücu
etme hakkına saklıdır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6.12.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket,
Danışan’ın Mobil Uygulama ve/veya İnternet Sitesi üzerindeki işlemleri
sırasında gerçekleştirdiği faaliyetler ve/veya işbu Sözleşme ve yasaya aykırı
eylemleri neticesinde üçüncü kişilerin uğradıkları veya uğrayabilecekleri
zararlardan doğrudan ve/veya dolaylı olarak hiçbir şekilde sorumlu tutulamaz.
Üçüncü kişilerden bu kapsamda gelecek her türlü talep ile Danışan’ın işbu
Sözleşme’de veya ilgili mevzuatta belirtilen yükümlülüklerini yerine
getirmemesi nedeniyle Şirket’in uğrayacağı zararlar ilk talepte ferileri ile
birlikte ödenmek üzere, Danışan’a rücu edilecektir. Danışan bu zararlardan
herhangi bir meblağ ile sınırlı olmaksızın kusuru oranında sorumludur.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6.13.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışanlar,
Şirket’e verdiği bilgilerinin (isim, soy isim, T.C. kimlik numarası, adres,
e-posta, banka hesap bilgisi, telefon numarası) doğru ve kendilerine ait
olduğunu kabul ve beyan eder. Şirket bu bilgilerin doğru olmadığını tespit eder
ise, durumun mahiyetine göre Danışan’a ayrıca herhangi bir bildirimde
bulunmaksızın, işlemi, satışı, hizmeti, üyeliği iptal edebilir ya da mevzuat
dahilinde uygun gördüğü diğer yaptırımları uygulayabilir. Şirket’in hukuki ve
cezai hakları saklıdır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6.14.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Danışan, üyelik
bilgileri ile kendisine ait diğer kişisel verilerin, 6698 sayılı Kişisel
Verilerin Korunması Kanunu ve ilgili mevzuat kapsamında Veri Sorumlusu sıfatı
ile Şirket tarafından işlenmesine&nbsp;</span><span lang="TR"><a href="https://kidolog.com/sozlesmeler/aydinlatma-metni"><span style="font-family:
&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">Aydınlatma Metni</span></a></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;kapsamında
muvafakat vermiş olup bu verilerin işlendiğini bilir ve kabul eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6.15.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışan,
Şirket’ten sağladığı Hizmetler sırasında, yaptığı her türlü iş ve işlemin
sorumluluğunun kendisine ait olduğunu; burada gerçekleştirilen iş ve işlemleri
kendisinin gerçekleştirmediği yolunda herhangi bir def’i ve/veya itiraz ileri
süremeyeceğini ve/veya bu def’i veya itiraza dayanarak yükümlülüklerini yerine
getirmekten kaçınmayacağını kabul, beyan ve taahhüt eder.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6.16.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket,
dilediği zaman Danışan’ın üyeliğini sebep göstermeksizin ve ihbarda
bulunmaksızın geçici veya sürekli olarak askıya alabilir, belirlenecek sair
sınırlamalara tabi tutabilir veyahut işbu Üyelik Sözleşmesi’ni tek taraflı
olarak feshedebilir. Üyelik Sözleşmesi’nin feshedilmesi veya askıya alınması
durumunda Danışan’ın Şirket’ten mevcut bir alacağı olması halinde, Şirket bunu
muhtemel bir zararın varlığı halinde mahsup etmek amacı ile alıkoyabilir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6.17.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Danışmanlar
tarafından Ürün ve/veya Hizmetler üzerinde yapılacak değişiklikler Şirket’in
sorumluluğunda değildir. Bu değişiklikler sebebiyle doğabilecek her türlü fikri
ve sınai mülkiyet ihlallerinden, bu ihlallerden dolayı üçüncü kişilerin
uğrayabileceği her türlü zarardan ve doğabilecek hukuki ve cezai tüm
sorumluluklardan ilgili Danışmanlar tek başına ve münhasıran sorumludur.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Ürün ve Hizmet Satışına İlişkin Hükümler</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">7.1.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Danışanlar,
ihtiyaçları doğrultusunda, kendilerine en yakın buldukları uzmanı seçmekte özgürdürler.&nbsp;
Danışanlar, Şirket’in İnternet Sitesi ve/veya Mobil Uygulaması ile Hizmet
alacağı Danışman’ı seçer, Danışman’ın da uygun olduğu tarih ve saate göre
randevu zamanını belirler, kredi kartı ve/veya Şirket’in belirleyeceği diğer
ödeme yöntemleri ile satın alır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">7.2.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Danışan,
kendisine tanınan gün ve saatte tüm hakları sadece ve yalnızca Şirket’e ait
olan ve görüşmenin yapılmasına aracılık eden “TalentoMeet” platformu üzerinden
önceden belirlenmiş kurallara uygun olarak Hizmet’i alır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">7.3.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Danışan,
Danışmanlar’dan aldıkları Ürün ve/veya Hizmetler sırasında kanuna aykırı eylem
ve davranışlarda bulundukları veya bulunacaklarını ifade etmeleri ve/veya
kanaat uyandırmaları halinde, Danışmanları’nın ve Şirket’in işbu durumu yetkili
idari ve adli mercilere bildirebileceklerini kabul eder ve kanuna aykırılık
nedeniyle yapılan ihbar/şikayet sebebiyle Şirket ve/veya Danışmanlar’ın
sorumluluğu bulunmamakta olduğunu bilir, işbu husus sebebiyle gizliliğin ihlal
edildiğini ileri süremez. Hizmet’in görülmesi sırasında, TalentoMeet üzerinden
herhangi bir şekilde kayıt alınmayacağını, tamamen gizli ve 3.kişilerin
Danışman tarafından davet edilmediği sürece yalnızca kendisi ile Danışman
arasında gerçekleşeceğini, kabul, beyan ve taahhüt eder. Aksi taktirde, cezai
ve hukuki alanda sorumlu olacağını kabul, beyan ve taahhüt eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">7.4.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışan,
Hizmet’in görülmesi sırasında ve/veya öncesinde ve/veya sonrasında hiçbir
suretle Danışman’ın özel bilgilerini (ad, soyad, adres, telefon numarası v.b.)
talep etmeyeceğini, Hizmet’in sağlanmasında Şirket’i egale edici eylem ve
davranışlarda bulunmayacağını, Hizmet’i yalnızca ve sadece Şirket aracılığıyla
alacağını kabul ve taahhüt eder. Aksi Şirket tarafından tespit edildiği
taktirde, Şirket’in her türlü hakkı saklı kalarak, Danışan’ın üyeliğini sebep
göstermeksizin ve ihbarda bulunmaksızın geçici veya sürekli olarak askıya
alabilir, belirlenecek sair sınırlamalara tabi tutabilir veyahut işbu Üyelik
Sözleşmesi’ni tek taraflı olarak feshedebilir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">7.5.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışan,
işbu Ürün ve/veya Hizmet’i alırken, 18 yaşından büyük olduğunu ve Sözleşme’yi
yapmak için gereken fiil ehliyetine sahip olduğunu; bahsi geçen Ürün ve
Hizmetler’in kendisi tarafından alınmasına karşı herhangi bir hukuki veya fiili
engel bulunmadığını; yürürlükteki tüm mevzuata uygun ve tüm hukuki sorumluğunun
kendisine ait olduğunu; Şirket’in Ürün ve Hizmetler’in arzı ve satışı
konusunda, hiçbir sıfat altında kendisiyle doğrudan ve dolaylı ilişki içinde
olmadığını kabul ve taahhüt eder. Danışan’ın sayılan hususlara aykırılığının
tespiti halinde ve Danışan’ın işlemleriyle ilgili Şirket’e Danışmanlar’dan 3
kez şikayet ulaşması durumunda Şirket’in her türlü hakkı saklı kalarak,
Danışan’ın üyeliğini sebep göstermeksizin ve ihbarda bulunmaksızın geçici veya
sürekli olarak askıya alabilir, belirlenecek sair sınırlamalara tabi tutabilir
veyahut işbu Üyelik Sözleşmesi’ni tek taraflı olarak feshedebilir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">7.6.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket,
bünyesinde sunulan Ürün ve/veya Hizmetler’in hukuka aykırı olması, başkalarının
şahsi ve ticari haklarına tecavüz niteliği taşıması veya bu yönde yapılan
ihtarlara muhatap olması veya Kullanım Koşulları, Hizmet Sözleşmesi, Üyelik
Sözleşmesi ve ekleri ile diğer kural ve koşullara doğrudan veya dolaylı olarak
aykırı olması gibi sebeplerle Şirket’e Danışan tarafından yapılan bir ihtarla
ilgili, Şirket, Ürün ve/veya Hizmet’in sağlanmasını geçici veya sürekli olarak
durdurabilir, askıya alabilir, kaldırabilir. Söz konusu sebeplerin oluşmasında
Şirket’in kusuru bulunmamakla birlikte, sadece Aracı Hizmet Sağlayıcısı
olmasından kaynaklı bir sorumluluğu da bulunmamaktadır. Şirket’e ilgili Ürün
ve/veya Hizmet’in sağlanmasına ilişkin bir ödeme yapılması gerekiyorsa veya
henüz ödemeyi gerçekleştirmemişse Danışan, bu ödemeyi yapma yükümlülüğü ortadan
kalkar. Şayet, Şirket’e bu konuda yapılan bir ödeme söz konusu ise, ilgili
ödemeyi gösterir belgeler ile Şirket’e yapılan cayma başvurusu sonucunda
değerlendirme yapılıp iade prosedürüne ilişkin incelemeleri Şirket
başlatacaktır. Bu kapsamda Danışan, ödemiş olduğu bedel iadesinin cayma hakkını
kullanması kapsamında 4 gün içerisinde gerçekleşeceğini ve iade prosedürü ile
ilgili kararların sadece ve yalnızca Şirket’te bulunduğunu bilir ve kabul eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">7.7.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışan,
Şirket’in sunduğu altyapı ve Şirket aracılığı ile Ürün ve/veya Hizmetler’i
Danışmanlar’dan alır. Danışan’ın satın alma talebi, Ürün ve/veya Hizmet’e
ilişkin Şirket tarafından hazırlanan, Şirket ya da Şirket dışındaki
platformlarda belirtilen koşulları kabul ederek Danışman ile arasında bir
hizmet ve/veya satış akdinin Ürün’ü ve/veya Hizmet’i satın alma talebiyle
kurulduğu anlamına gelmektedir. Danışan, bu satın alma talebiyle ilgili Ürün’ü
ve/veya Hizmet’i satın almayı kabul ve taahhüt eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">7.8.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket;
yapılan herhangi bir işleme harcama itirazı bildirimi gelmesi ve/veya ödeme
hizmeti sağlayan kuruluşun yapılan işlem aleyhine yapılan itirazı kabul etmesi
ve bu kapsamda itirazın kesinleşmesi veyahut işlemin şüpheli bir işlem olması;
şüpheli işlemlerle ilgili Danışan’a Şirket tarafından ulaşılamaması, söz konusu
işlemin Danışan’ın ve Şirket’in genel işlem tutarı ortalamasının üzerinde
olması veyahut da işlemin geçerliliği ve hukukiliğine ilişkin herhangi bir
nedenle şüphe uyandırması halinde, ilgili işleme ilişkin ödenen ücretin
Danışan’a aktarılması için Danışan’dan ek bilgi ve belgeler talep edebilir. Söz
konusu ek bilgi ve belgeler tamamlanıncaya ve/veya Danışan tarafından yapılan
ödeme ilgili işleme ilişkin şüphe ortadan kalkıncaya değin Danışan’ın hesabına
aktarılmayabilir. Bu kapsamda, Danışan’dan talep edilen bilgi ve belgelerin
Şirket’e iletilme süresinin dolması durumunda, Danışan tarafından yapılan
ödeme, Şirket tarafından bloke edilebilir veya ilgili siparişe ilişkin bedelin
Danışan ya da Bankasına iade etmesi halinde, Şirket ödediği bedele ilişkin
haklarını saklı tutar. Bu hususta karar verme yetkisi yalnızca ve sadece
Şirket’e ait olup belirtilen işlem yalnızca Danışan’ın güvenliğini sağlamak
maksadıyla kullanılmaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">7.9.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışan,
Şirket’in yasal mevzuat gereği resmi makamlara açıklama yapmakla yükümlü olduğu
durumlarda, resmi makamlarca usulü dairesinde bu bilgilerin talep edilmesi
halinde Danışan’a ait, Şirket Hizmetleri dahilinde edinilen bilgileri resmi
makamlara veya Şirket’in ürün ve hizmetlerin ifasına yönelik olarak açıklamaya
yetkili olacaklarını, bu hallerin Şirket Gizlilik Politikalarına ve KVKK ile
ilgili mevzuata aykırılık teşkil ettiği şeklinde yorumlanmayacağını ve bu
sebeple Şirket’ten her ne nam altında olursa olsun tazminat talep
edilemeyeceğini kabul eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Yasaklar, Sorumluluk ve Tazminat</span></strong><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">8.1.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Danışan, Ürün
ve/veya Hizmetler’i hukuka ve yürürlükteki mevzuata uygun bir şekilde edinmeyi
kabul ve taahhüt eder. Danışan’ın, Ürün ile ilgili ve/veya Hizmetler’i
kullanırken yapacağı her işlem ve eylemdeki hukuki ve cezai sorumluluktan
Danışmanlar’ın bizzat ve münhasıran sorumlu olduğunu, Şirket’in yalnızca ve
sadece 6502 sayılı Tüketicinin Korunması Hakkında Kanun ve 6563 sayılı
Elektronik Ticaret Düzenlenmesi Hakkında Kanun kapsamında mesafeli sözleşme
kurulmasına aracılık eden ve Aracı Hizmet Sağlayıcı sıfatını haiz olduğunu
bilir, kabul ve beyan eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">8.2.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Danışan, Ürün
ve/veya Hizmetler’i çoğaltmayacağını, kopyalamayacağını, dağıtmayacağını,
işlemeyeceğini kabul ve taahhüt eder. Şirket’in söz konusu Ürün ve/veya
Hizmetler’den herhangi bir hukuki veya sözleşmesel sorumluluğu bulunmamaktadır.
Danışmanlar tarafından Şirket’e eklenen, gerçekleştirilen eylemler veya başka
yollarla Şirket ile doğrudan ve/veya dolaylı zarara uğratacak nitelikte,
sınırlamaları aşan veya ihlal eden Ürün ve/veya Hizmetler’den, devlet, yargı
veya hak sahibi üçüncü şahıslar tarafından yöneltilen tüm hukuki ve cezai
yaptırımlardan bizzat Danışmanlar’ın sorumlu olduğunu, Danışan bilir, kabul ve
beyan eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">8.3.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket,
çevrimiçi ya da çevrimdışı konumdaki hiçbir Danışman’ın davranışlarından
sorumlu değildir. Şirket’in, hiçbir koşulda Şirket’in kullanımı, Ziyaretçiler
arasındaki çevrimiçi veya çevrimdışı her türlü iletişim ve etkileşimden doğan
sonuçlardan kayıp, hasar, zarar, ölüm vs. dahi olsa sorumluluğu
bulunmamaktadır. Şirket’in, herhangi bir sebeple bu tür eylemler neticesinde
uğrayabileceği her tür zararın tazminini talep hakkı saklıdır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">8.4.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışan;
suç teşkil edecek, Şirket’in kullanımında yasal açıdan takip gerektirecek,
yerel ve ulusal yasalara ya da uluslararası anlaşmalara ters düşecek bir durum
yaratan ya da böyle durumları teşvik eden, her türlü yasa dışı, hakaret ya da
tehdit içeren, küfür içeren, küçük düşürücü, pornografik, rahatsız edici ya da
ahlaka aykırı eylem ve davranışlarda bulunamaz, bu gibi içerikleri edinemez.
Danışan, bir başkasının gizlilik hakkını ya da ticari marka haklarını Ürün
ve/veya Hizmetler’in edinimi öncesinde, sonrasında, sırasında ihlal edemez. Bu
hükmün aykırılığının tespiti halinde, Şirket, aykırılığa sebep olan Danışan’ın
üyeliğini derhal ve ayrıca bir bildirimde bulunmaksızın sona erdirme hakkına
haizdir ve tüm haklarını saklı tutar.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">8.5.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket,
Danışanın; Danışman ya da onların e-posta adreslerine ya da herhangi bir
iletişim aracı ile, ticari ya da reklam amaçlı istek dışı mesaj göndermesi, bu
amaçla başka bir internet sitesine yönlendirmesi ve Şirket’te var olan ve
ileride oluşturulabilecek interaktif alanların bu şekilde yetki dışında
kullanması, Şirket’i egale ederek Danışman ile birebir Hizmet alınmasının
amaçlanması gibi durumlarda hukuki yollara başvurma hakkını saklı tutar.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">8.6.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışan
tarafından Danışmanlar ile yapılan görüşmeler sırasında veya Şirket’in ilgili
alanlarına gönderilen ve/veya yüklenen içeriklerden münhasıran söz konusu
içeriği yükleyen veya gönderen Danışan ve/veya Danışman sorumludur. Şirket,
Danışan ve/veya Danışman tarafından gönderilen ve/veya yüklenen içeriklere
ilişkin hiçbir sorumluluk üstlenmemektedir. Danışan, Şirket’in içerikleri
izlemediğini, ancak bu kuralların ihlal edildiğine veya başka bir nedenle
zararlı olduğuna kendi inisiyatifine dayanarak kanaat getirdiği içerikler dahil
olmak üzere, herhangi bir sebeple her türlü içeriği inceleme ve kaldırma
hakkını saklı tuttuğunu kabul eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">8.7.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket
bünyesinde tutulan kişisel verilerin güvenliğinin sağlanması adına gereken tüm
tedbirleri almaktadır. Ancak, siber saldırı ve/veya hırsızlık vb. haller ile
kişisel verilerin üçüncü kişilerin eline geçmesinden Şirket’in sorumluluğu
bulunmamaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">8.8.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket’te
yer alan bütün yazılı, resimli, sesli, grafik içeren ve/veya içermeyen tablo
gibi materyallerin her hakkı saklıdır. Bu materyallerin kopyalanmak suretiyle
kişisel sayfalarda yayınlanması ve/veya pazarlanması kesinlikle yasaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">8.9.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Danışan,
Şirket’te paylaştığı veya yüklediği her türlü içerik için, Şirket’e söz konusu
içeriklerin Şirket’te veya çeşitli mecralarda, çeşitli amaçlarla ve çeşitli
şekillerde yayınlanmasına ilişkin hakları ve söz konusu içerikleri ayrıca bir
ücret ödemesi gerekmeksizin herhangi bir form, ortam veya teknolojiye aktarma
hakkını, yasal mevzuat sınırları içerisinde ve sözleşme süresi içerisinde,
devredilebilir bir hak olarak verir. Herhangi bir karışıklığa sebep olmamak
adına belirtmek gerekir ki; işbu madde kapsamında, Şirket, Danışan tarafından
paylaşılan veya yüklenen içerikleri kendilerine ilişkin herhangi bir hak iddia
etmemekte, içeriklerin görüntülerinin Şirket’te veya çeşitli mecralarda
yayınlanması haklarına ilişkin bir bilgilendirme yapılmaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">8.10.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışan’ın
kusuru ile sebebiyet verdiği; Şirket’in doğrudan ve/veya dolaylı olarak
herhangi bir sebeple zarara uğraması, itibarının zedelenmesi, resmi ve idari
makamlarca yaptırım ve/veya ceza uygulanması hallerinde ve ancak bunlarla
sınırlı olmamak üzere oluşan durumların tamamında, Şirket tarafından yapılacak
ilk yazılı talepte belirtilen bütün doğrudan ve/veya dolaylı menfi ve müspet
zararları aksi kararlaştırılıncaya dek tek seferde nakden ve defaten
karşılayacağını kabul, beyan ve taahhüt eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">8.11.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket’in
herhangi bir talebe veya soruya yanıt verme yükümlülüğü bulunmamaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">8.12.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Danışan, her
koşulda Şirket’i kar kaybı da dahil olmak ve fakat bununla sınırlı olmamak
üzere herhangi bir zarara uğratmamakla ve Şirket’in saygınlığına herhangi bir
zarar vermemekle yükümlüdür. Bu kapsamda Danışan, Şirket’te belirtilen tüm
koşul ve kurallara uygun davranacağını, Şirket aleyhine ve/veya gerçeği
yansıtmayan beyanlarda bulunmamayı, Şirket markasını kötüleyici eylem ve
davranışlarda bulunmamayı, Şirket’te Ürün ve/veya Hizmet sağlayan Danışmanlar
hakkında doğru ve gerçeğe uygun yorum yapmayı ve aksi bir durum ile
karşılaştığında işbu durumu derhal Şirket’e bildirmeyi, kabul ve taahhüt eder.
Danışan, Danışmanlar tarafından kendi memnuniyetine azami özen gösterileceğini;
Danışmanlar ile olan ilişkilerinde Danışmanlar’a karşılıklı saygı çerçevesinde
yürütmekle yükümlü olduklarını ve bu kapsamda karşılıklı ve ayrı ayrı her ne
şekilde olursa olsun hakaretamiz ifadelerin kullanılmayacağını, birbirini
aşağılayan, karalayan, renciden eden her türlü hareketten kaçınılacağını bilir
ve kabul eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">8.13.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışan,
Şirket’e verdiği iletişim bilgilerinin doğru olduğunu ve mesai saatleri içinde
ulaşılabilir olmakla yükümlü olduğunu kabul ve taahhüt eder. Şirket tarafından
talep edilen ve gönderilmesi gereken tüm belge ve kayıtların Kişisel Verilerin
Korunması Kanunu kapsamında sadece ve yalnızca müşteri memnuniyetinin
sağlanması ve faaliyet alanı içerisinde kullanılacak olup Danışan, üyelik
bilgileri ile kendisine ait diğer kişisel verilerin, 6698 sayılı Kişisel
Verilerin Korunması Kanunu ve ilgili mevzuat kapsamında Veri Sorumlusu sıfatı
ile Şirket tarafından işlenmesine&nbsp;</span><span lang="TR"><a href="https://kidolog.com/sozlesmeler/aydinlatma-metni"><span style="font-family:
&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">Aydınlatma Metni</span></a></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;kapsamında
muvafakat vermiştir. İşbu maddede belirtilen yükümlülüğün yerine getirilmemesi
halinde Şirket, Danışmanlar hakkında bilgisi bulunmadığından bahisle herhangi
bir eylem ve davranış göstermemesi sebep gösterilerek sorumlu tutulamaz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">9.
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Geçerlilik ve Değişiklik</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">9.1.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">İşbu Sözleşme;
Danışan, üyeliğe devam ettiği sürece yürürlükte kalacak ve taraflar arasında
hüküm ve sonuçlarını doğurmaya devam edecektir. Danışan’ın üyelik süresinin
dolması veya geçici veya kalıcı olarak üyeliğinin durdurulması hallerinde sona
ermiş sayılacaktır. Kullanım Koşulları ve diğer metinlerin tamamı işbu Üyelik
Sözleşmesi’nin eki ve ayrılmaz bir parçasıdır. Üyelik Sözleşmesi, Kullanım
Koşulları ve ekleri Şirket tarafından Sözleşme’de kararlaştırılan esaslar
çerçevesinde güncellenebilir. Danışan, Şirket’e her giriş yaptığında
güncellenmiş hükümleri aynen kabul etmiş sayılacaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">10.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Yürürlük</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">10.1&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">İşbu Sözleşme
ve ekleri Türkiye Cumhuriyeti kanunlarına tabidir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">10.2.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;İşbu
Sözleşme’nin uygulanmasından ve/veya yorumlanmasından doğabilecek tüm
uyuşmazlıkların çözümünde Ankara Ceza Mahkemeleri ve İcra Müdürlükleri’nin
münhasıran yetkili olduğunu kabul ve beyan ederler.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">10.3.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">İşbu Üyelik
Sözleşmesi, Hizmetler’e ilişkin olarak Şirket’te yayınlanan tüm metinler işbu
Üyelik Sözleşmesi’nin ayrılmaz birer parçası olarak kabul edilen bilcümle
uyarı, yazı ve açıklama gibi beyanlarda bildirilen tüm koşullardan, yayınlanan
belgelerden ve eklerden oluşan politika belgelerinin tamamı karşılıklı olarak
kabul edilerek Danışan’ın elektronik olarak onay vermesiyle birlikte yürürlüğe
girmiştir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">11.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Sözleşmenin İhlali ve Feshi</span></strong><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">11.1.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışan’ın
işbu Sözleşme’de yer alan hükümlere ve işbu Sözleşme uyarınca beyan edilen
kural ve şartlara uymaması, Danışan’ın işbu Sözleşme kapsamındaki
faaliyetlerinin hukuki, teknik veya bilgi güvenliği anlamında risk oluşturması,
hileli veya yetkisiz kullanım şüphesi olması&nbsp; ya da üçüncü kişilerin şahsi
ve ticari haklarına halel getirici mahiyette olması halinde Şirket, Danışan’ın
Şirket Hizmetleri’nden faydalanmasını geçici veya sürekli olarak durdurabilir,
Sözleşme’de belirtilen yaptırımları gerçekleştirebilir yahut Sözleşme’yi
feshedebilir. Danışan’ın bu nedenle Şirket’ten herhangi bir talebi söz konusu
olamaz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">11.2.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket
her zaman herhangi bir gerekçe göstermeden, herhangi bir bildirimde bulunmadan
ve herhangi bir tazminat ödeme yükümlülüğü bulunmadan ve derhal yürürlüğe
girecek şekilde işbu Sözleşme’yi tek taraflı olarak feshedebilir ve Danışan’ın
işbu Şirket Hizmetleri’nden yararlanmasına son verebilir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">11.3.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket’in
faaliyeti bırakması veya Kanun kapsamındaki faaliyet izninin herhangi bir
nedenle sonlanması halinde, işbu Sözleşme Şirket’e herhangi bir tazminat
yükümlülüğü doğurmaksızın Şirket tarafından yapılan bildirime istinaden
feshedilecektir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">11.4.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Sözleşmenin
feshi Şirket’in fesih tarihine kadar doğmuş olan haklarını ortadan kaldırmaz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">11.5.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket’in;
Üyelik Sözleşmesi ve işbu Üyelik Sözleşmesi’nin eki ve ayrılmaz bir parçası
olan Kullanım Koşulları ve diğer metinlerin tamamı kapsamında ve/veya ihlalleri
hallerinde fesih hakkı saklıdır.</span></p>

<p class="MsoNormal"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">11.6. </span><span lang="TR">Danışan bu sözleşmeyi ve programı iptal
etmek istediğinde;</span></p>

<p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;
margin-bottom:8.0pt;margin-left:53.25pt;mso-add-space:auto;text-indent:-.25in;
mso-list:l0 level1 lfo2"><span lang="TR" style="mso-ascii-font-family:
Calibri;mso-fareast-font-family:Calibri;mso-hansi-font-family:Calibri;
mso-bidi-font-family:Calibri"><span style="mso-list:Ignore">-<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><span lang="TR">Öncelikle iptal talebini yazılı
olarak Kurum’a bildirmek zorundadır. </span></p>

<p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;
margin-bottom:8.0pt;margin-left:53.25pt;mso-add-space:auto;text-indent:-.25in;
mso-list:l0 level1 lfo2"><span lang="TR" style="mso-ascii-font-family:
Calibri;mso-fareast-font-family:Calibri;mso-hansi-font-family:Calibri;
mso-bidi-font-family:Calibri"><span style="mso-list:Ignore">-<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><span lang="TR">Danışan başladığı günden iptal
etmek güne kadar olan süreçte danışanın hesabına yüklenen her bir dinleti için
400 TL ödemeyi,</span></p>

<p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;
margin-bottom:8.0pt;margin-left:53.25pt;mso-add-space:auto;text-indent:-.25in;
mso-list:l0 level1 lfo2"><span lang="TR" style="mso-ascii-font-family:
Calibri;mso-fareast-font-family:Calibri;mso-hansi-font-family:Calibri;
mso-bidi-font-family:Calibri"><span style="mso-list:Ignore">-<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><span lang="TR">Program öncesinde yapılan tanılama
ve program oluşturma testleri yapıldı ise her bir test için 400 TL ödemeyi, </span></p>

<p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;
margin-bottom:8.0pt;margin-left:53.25pt;mso-add-space:auto;text-indent:-.25in;
mso-list:l0 level1 lfo2"><span lang="TR" style="mso-ascii-font-family:
Calibri;mso-fareast-font-family:Calibri;mso-hansi-font-family:Calibri;
mso-bidi-font-family:Calibri"><span style="mso-list:Ignore">-<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><span lang="TR">Haftalık destek seansları için 400
TL ödemeyi kabul ve taahhüt eder.</span></p>

<p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;
margin-bottom:8.0pt;margin-left:53.25pt;mso-add-space:auto;text-indent:-.25in;
mso-list:l0 level1 lfo2"><span lang="TR" style="mso-ascii-font-family:
Calibri;mso-fareast-font-family:Calibri;mso-hansi-font-family:Calibri;
mso-bidi-font-family:Calibri"><span style="mso-list:Ignore">-<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><span lang="TR">Başladığı günden 4. haftaya kadar
Madde 5’te bulunan iptal şartlarına uyularak hesaplama yapılır ve danışana iade
gerçekleşir. 4. haftadan sonra iptal ve iade hakkınız bulunmamaktadır.</span></p>

<p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;
margin-bottom:8.0pt;margin-left:53.25pt;mso-add-space:auto;text-align:justify;
text-indent:-.25in;mso-list:l0 level1 lfo2"><span lang="TR" style="mso-ascii-font-family:Calibri;mso-fareast-font-family:Calibri;
mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri"><span style="mso-list:Ignore">-<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><span lang="TR">Danışanın iptal talebi halinde
ödemek zorunda olduğu bedel 17.000 TL’yi geçemez. </span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">12.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Mücbir Sebep ve Umulmayan Haller</span></strong><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">12.1.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Taraflar’ın
kontrolü dışında gelişen, Taraflar’ın kendisinden kaynaklanmayan ve Taraflar’ın
işbu Sözleşme ile yüklendiği yükümlülüklerini yerine getirmelerini engelleyici
ve/veya geciktirici nitelikte olan grev, lokavt, savaş, seferberlik halleri,
halk ayaklanmaları, saldırı, doğal afetler (deprem, sel baskını, çığ düşmesi
vb.) yangın ve ciddi bulaşıcı hastalıkların baş göstermesi ve benzeri durumlar
mücbir sebep olarak kabul edilecektir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">12.2.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">İşbu
Sözleşme’nin imzalandığı tarihte var olmayan ve öngörülemeyen, Taraflar’ın veya
tek bir Tarafın çalışma imkânlarını kısmen veya tamamen, geçici veya daimi
olarak durduracak şekilde ve derecede meydana gelen beşeri ve doğal afetler,
salgın hastalık, harp, seferberlik, yangın, grev, lokavt, telekomünikasyon
altyapısından kaynaklanan arızalar, elektrik kesintisi ve kötü hava koşulları
vb. haller ile Taraflar’ın kontrolü haricinde zuhur eden sair haller mücbir
sebep sayılır. Mücbir sebebe maruz kalan Taraf durumu derhal diğer Tarafa
yazılı olarak bildirir ve mücbir sebep süresi boyunca Taraflar’ın edimleri
askıya alınır. Mücbir sebepler ortadan kalkınca Sözleşme kaldığı yerden devam
eder.</span></p>',
               ],
               [
                    'user_id' => $superAdmin->user_id,
                    'title' => 'Mesafeli Satış Sözleşmesi',
                    'slug' => Str::slug('Mesafeli Satış Sözleşmesi'),
                    'content' => '<!--[if gte mso 9]><xml>
 <o:OfficeDocumentSettings>
  <o:RelyOnVML/>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:View>Normal</w:View>
  <w:Zoom>0</w:Zoom>
  <w:TrackMoves/>
  <w:TrackFormatting/>
  <w:PunctuationKerning/>
  <w:ValidateAgainstSchemas/>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:DoNotPromoteQF/>
  <w:LidThemeOther>TR</w:LidThemeOther>
  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
  <w:Compatibility>
   <w:BreakWrappedTables/>
   <w:SnapToGridInCell/>
   <w:WrapTextWithPunct/>
   <w:UseAsianBreakRules/>
   <w:DontGrowAutofit/>
   <w:SplitPgBreakAndParaMark/>
   <w:EnableOpenTypeKerning/>
   <w:DontFlipMirrorIndents/>
   <w:OverrideTableStyleHps/>
  </w:Compatibility>
  <m:mathPr>
   <m:mathFont m:val="Cambria Math"/>
   <m:brkBin m:val="before"/>
   <m:brkBinSub m:val="&#45;-"/>
   <m:smallFrac m:val="off"/>
   <m:dispDef/>
   <m:lMargin m:val="0"/>
   <m:rMargin m:val="0"/>
   <m:defJc m:val="centerGroup"/>
   <m:wrapIndent m:val="1440"/>
   <m:intLim m:val="subSup"/>
   <m:naryLim m:val="undOvr"/>
  </m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
  DefSemiHidden="false" DefQFormat="false" DefPriority="99"
  LatentStyleCount="376">
  <w:LsdException Locked="false" Priority="0" QFormat="true" Name="Normal"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 1"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 2"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 3"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 9"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 1"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 2"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 3"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 4"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 5"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 6"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 7"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 8"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="header"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footer"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index heading"/>
  <w:LsdException Locked="false" Priority="35" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="caption"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of figures"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope return"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="line number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="page number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of authorities"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="macro"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toa heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 5"/>
  <w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Closing"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Signature"/>
  <w:LsdException Locked="false" Priority="1" SemiHidden="true"
   UnhideWhenUsed="true" Name="Default Paragraph Font"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Message Header"/>
  <w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Salutation"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Date"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Note Heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Block Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Hyperlink"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="FollowedHyperlink"/>
  <w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>
  <w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Document Map"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Plain Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="E-mail Signature"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Top of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Bottom of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal (Web)"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Acronym"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Cite"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Code"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Definition"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Keyboard"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Preformatted"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Sample"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Typewriter"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Variable"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Table"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation subject"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="No List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Contemporary"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Elegant"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Professional"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Balloon Text"/>
  <w:LsdException Locked="false" Priority="39" Name="Table Grid"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Theme"/>
  <w:LsdException Locked="false" SemiHidden="true" Name="Placeholder Text"/>
  <w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>
  <w:LsdException Locked="false" SemiHidden="true" Name="Revision"/>
  <w:LsdException Locked="false" Priority="34" QFormat="true"
   Name="List Paragraph"/>
  <w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
  <w:LsdException Locked="false" Priority="30" QFormat="true"
   Name="Intense Quote"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="19" QFormat="true"
   Name="Subtle Emphasis"/>
  <w:LsdException Locked="false" Priority="21" QFormat="true"
   Name="Intense Emphasis"/>
  <w:LsdException Locked="false" Priority="31" QFormat="true"
   Name="Subtle Reference"/>
  <w:LsdException Locked="false" Priority="32" QFormat="true"
   Name="Intense Reference"/>
  <w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
  <w:LsdException Locked="false" Priority="37" SemiHidden="true"
   UnhideWhenUsed="true" Name="Bibliography"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
  <w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
  <w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
  <w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
  <w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
  <w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
  <w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
  <w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Mention"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Smart Hyperlink"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Hashtag"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Unresolved Mention"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Smart Link"/>
 </w:LatentStyles>
</xml><![endif]--><!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Table Normal";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-parent:"";
	mso-padding-alt:0in 5.4pt 0in 5.4pt;
	mso-para-margin:0in;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-ansi-language:TR;}
</style>
<![endif]-->

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Talento
Sound Eğitim ve Danışmanlık Hizmetleri Ticaret Limited Şirketi</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"></span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">&nbsp;</span></strong></p><p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Mesafeli
Satış Sözleşmesi</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">İşbu Mesafeli Satış
Sözleşmesi (“</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Sözleşme</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">”), Türkiye
Cumhuriyeti kanunları uyarınca kurulmuş ve mevcudiyetini sürdüren bir anonim
şirket olan, İstanbul Ticaret Odası’na </span><span lang="TR">430579-5 </span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"><span style="mso-spacerun:yes">&nbsp;</span>sicil numarası ile kaydedilmiş bulunan
ve&nbsp;</span><em><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:
&quot;Segoe UI&quot;;color:#030349">Altunizade Mah. Üniversite Sk. No:8 Üsküdar/İstanbul</span></em><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;adresinde
mukim&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Talento Sound Eğitim ve
Danışmanlık Hizmetleri Ticaret Limited Şirketi&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">("</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">Şirket veya Talento Sound</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">") ile&nbsp;</span><span lang="TR">talentosound.com.tr</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">&nbsp;internet sitesi (“</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">İnternet
Sitesi</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">”) üzerinden Şirket’in Ürün ve/veya Hizmetleri’ni satın alan (“</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">Alıcı veya Danışan</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">”) arasında, Alıcı’nın;
İnternet Sitesi’ni kullanması ve Şirket’in Aracılık Hizmet Sağlayıcısı sıfatı
ile gerçekleştirdiği Danışmanlar’dan aldığı ürün ve/veya Hizmetlere yönelik
olarak ve İnternet Sitesi’nden ve/veya uygulamadan Alıcı tarafından elektronik
ortamda satın almanın kabulü ile birlikte yürürlüğe girecek olup taraflarca
Sözleşme’de belirtilen usuller doğrultusunda sona erdirilmediği sürece
yürürlükte kalmaya devam edecektir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Alıcı’nın&nbsp;</span><span lang="TR">talentosound.com.tr</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">&nbsp;&nbsp;internet sitesinden&nbsp;</span><span lang="TR"><a href="https://kidolog.com/uye/kayit"><span style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">Üye Kayıt Formu</span></a></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">’nu doldurarak
işbu Sözleşmeyi elektronik ortamda imzalamasıyla / onaylamasıyla kabul
beyanının Şirket kayıtlarına geçtiği an kurulmuş ve yürürlüğe girmiş
sayılacaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">1.
Sözleşmenin Tarafları</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">&nbsp;&nbsp;</span><strong><span lang="TR" style="font-family:
&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">&nbsp;&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">1.1.
Şirket Bilgileri:</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l2 level1 lfo1;
     tab-stops:list .5in"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Ticaret Unvanı:&nbsp;</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;">Talento
     Sound Eğitim ve Danışmanlık Hizmetleri Ticaret Limited Şirketi</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l2 level1 lfo1;
     tab-stops:list .5in"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Adres:&nbsp;</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;">Altunizade
     Mah. Üniversite Sk. No:8 Üsküdar/İSTANBUL</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l2 level1 lfo1;
     tab-stops:list .5in"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Vergi Numarası:&nbsp;</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;">8170681660<strong><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;Vergi
     Dairesi:&nbsp;</span></strong>ÜSKÜDAR VERGİ DAİRESİ</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l2 level1 lfo1;
     tab-stops:list .5in"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">E-posta:&nbsp;</span></strong><span lang="TR" style="color:windowtext"><a href="mailto:online@talentosound.com"><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;">online@talentosound.com</span></a></span><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;"></span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l2 level1 lfo1;
     tab-stops:list .5in"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Telefon No:&nbsp;</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;">0552
     320 94 27</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l2 level1 lfo1;
     tab-stops:list .5in"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Ticaret Sicil No:&nbsp;</span></strong><span lang="TR" style="color:windowtext">430579-5</span><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;"></span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l2 level1 lfo1;
     tab-stops:list .5in"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">MERSİS No:&nbsp;</span></strong><span lang="TR" style="color:windowtext">0817-0681-6600-0001</span><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;"></span></li></ol>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">1.2.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Bundan
böyle kısaca&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">“Şirket”</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;veya&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">“Talento Sound”</span></strong><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;olarak anılacaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">1.2.
Alıcı Bilgileri:</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo2;
     tab-stops:list .5in"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Adı Soyadı/ Ticaret Unvanı:
     ___________________</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;"></span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo2;
     tab-stops:list .5in"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Adres:
     _____________________________________</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;"></span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo2;
     tab-stops:list .5in"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">T.C. Kimlik No/ Vergi No:
     ______________________</span></strong><span lang="TR" style="font-family:
     &quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;"></span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo2;
     tab-stops:list .5in"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">E-posta: _______________</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;"></span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo2;
     tab-stops:list .5in"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Telefon No: ___________</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;"></span></li></ol>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">1.3.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Bundan
böyle kısaca&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">“Alıcı veya Danışan”</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;olarak
anılacaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">1.4.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket ve
Alıcı ayrı ayrı&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">“Taraf”</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;ve
birlikte&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">“Taraflar”</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;olarak
anılacaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">1.5.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Alıcı’nın&nbsp;</span><span lang="TR">talentosound.com.tr</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">&nbsp;&nbsp;internet sitesinden&nbsp;</span><span lang="TR"><a href="https://kidolog.com/uye/kayit"><span style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">Üye Kayıt Formu</span></a></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">’nu doldurarak
Şirket’in 6502 sayılı Tüketicinin Korunması Hakkında Kanun ve 6563 sayılı
Elektronik Ticaret Düzenlenmesi Hakkında Kanun kapsamında mesafeli sözleşme
kurulmasına aracılık eden ve&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">“Aracı
Hizmet Sağlayıcı”</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">&nbsp;sıfatı ile Danışmanlar’ın sağladığı Ürün ve/veya Hizmetler
ve Aracı Hizmet Sağlayıcısı olmasından kaynaklı Şirket tarafından sağlanan Ürün
ve/veya Hizmetleri ve Şirket’in sağladığı Ürün ve/veya Hizmetleri satın almak
maksadıyla işbu Sözleşmeyi elektronik ortamda onaylamasıyla kabul beyanının Talento
Sound kayıtlarına geçtiği an kurulmuş ve yürürlüğe girmiş sayılacaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">2.
Tanımlar</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Sözleşme&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
:&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">İşbu Mesafeli Satış Sözleşmesi’ni ifade etmektedir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Şirket
/
EBA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
:&nbsp;</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#212529">Talento Sound Eğitim ve Danışmanlık
Hizmetleri Ticaret Limited Şirketi</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">
</span></strong></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Alıcı
/ Danışan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket
üzerinde, oluşturduğu hesap ile Şirket‘in sadece aracı sıfatıyla hareket ettiği
Şirket üzerinden satışa sunulan Ürünler’i ve/veya Hizmetler’i alan Üyelik
Sözleşmesi’nde belirtilen koşullar dâhilinde Şirket’e üye olmuş gerçek veya
tüzel kişileri ifade eder. Ürün ve/veya Hizmetleri satan alan kişiler bundan
böyle “Alıcı veya Danışan” olarak anılacaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Danışman&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
:&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">Şirket üzerinde, oluşturduğu hesap ile&nbsp;</span><span lang="TR">talentosound.com.tr</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">&nbsp; alan kodunda yer alan sitede veya Şirket uygulaması
aracılığıyla Ürün ve/veya Hizmetler’i doğrudan sunan kişiler anlamına
gelmektedir. Uzmanlar, bundan böyle “Danışman” olarak anılabilecektir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Ziyaretçi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
:&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">Şirket’e erişen her gerçek veya tüzel kişiyi ifade eder.
Ziyaretçi tanımı, Danışan ve Danışman tanımlarının tamamını kapsamaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">İnternet
Sitesi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Tüm hakları
Şirket’e ait olan&nbsp;</span><span lang="TR">talentosound.com.tr</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;&nbsp;alan
adında ve bu alan adına bağlı alt alan adlarından oluşan, Şirket’in Danışman’ın
Ürünler’ini ve Hizmetler’ini satışa sunabilecekleri, Danışan’ların ise bu
Ürünler’i ve/veya Hizmetler’i alabilmelerine imkan sağlayan platform
Hizmetleri’nin sunulduğu internet sitesidir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Uygulama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
:&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">Tüm hakları Şirket’e ait olan, cep telefonu, tablet ve benzeri
taşınabilir cihazlarda çalışan yazılımdır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">TalentoMeet&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
:&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">Tüm hakları Şirket’e ait olan, Danışmanlar ile yapılacak
görüşmelerin gerçekleşmesine aracılık eden platformu ifade eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Arayüz&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
:&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">İçerikler’in Ziyaretçiler tarafından görüntülenebilmesi ve
Şirket Veritabanı’ndan sorgulanabilmesi amacıyla Ziyaretçiler tarafından
kullanılan; 5846 sayılı Fikir ve Sanat Eserleri Kanunu (FSEK) kapsamında
korunan ve tüm fikri hakları Şirket’e ait olan, Şirket üzerinden yapılabilecek
her türlü işlemin gerçekleştirilmesi için bilgisayar programına komut veren
internet sayfalarıdır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Veritabanı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
:&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">İçerikler’in depolandığı, tasnif edildiği, sorgulanabildiği ve
erişilebildiği ve mülkiyeti Şirket’e ait olan ve 5846 sayılı Fikir ve Sanat
Eserleri Kanunu gereğince korunan veriler bütünü ve bu verilerin
okunabilmelerini sağlayan sistemdir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Hizmetler&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
:&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">Şirket üzerinden Danışan ve Danışman’ın Üyelik Sözleşmesi’nde
tanımlı olan işlemleri gerçekleştirmelerini sağlamak amacıyla Şirket tarafından
sunulan platform sağlama Hizmetler’inin tamamını ifade eder. Uygulama veya
İnternet Sitesi üzerinden Danışan veya Danışman’ın yedi gün yirmi dört saat
ulaşabileceği, Şirket tarafından sunulan veya ileride sunulacak olan her türlü
ürün ve hizmetleri kapsamaktadır. Bu kapsamda ancak bununla sınırlı olmamak
üzere, Şirket üzerinden, ebeveyn ve kanunen yetişkin sayılan kişilere
psikoloji, çocuk gelişimi uzmanlığı ve özel eğitim gibi alanlarda danışmanlık
hizmetleri Danışman’lar tarafından verilecek olup Danışman’lar tarafından
verilecek Hizmetler’e Şirket sadece ve yalnızca aracılık etmektedir. Şirket,
sağlanan Hizmet’te Aracı Hizmet Sağlayıcısı sıfatındadır. Şirket, Sözleşme kapsamında
yer alan nedenlerin varlığı ve/veya koşulların gerçekleşmesi halleri ile yasal
mevzuat dahilinde gereklilik arz etmesi durumlarında dilediği zaman ve hiçbir
bildirimde bulunmaksızın Hizmetler’in tanımını değiştirme, Hizmetler’i üçüncü
kişilerin kullanımına kapatabilme hakkına sahiptir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Ürün&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
:&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">Şirket’in sadece aracılığını yaptığı ve Şirket üzerinden
Danışman’lar tarafından Üyelik Sözleşmesi ve eklerine uygun olarak satışa
sunulan ürün ve/veya hizmetleri ifade eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Hizmet
Bedeli &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Alıcı
tarafından Şirket’e ödenecek bedeli ifade eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Ödeme
Hizmet Sağlayıcı&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket’in sözleşmesel
ilişki içinde olduğu 6493 sayılı Ödeme ve Menkul Kıymet Mutabakat Sistemleri,
Ödeme Hizmetleri ve Elektronik Para Kuruluşları Hakkında Kanun’un 13.maddesine
göre 5411 sayılı Kanun kapsamındaki bankalar, elektronik para kuruluşları ve
ödeme kuruluşları ödeme hizmeti sağlayıcılarıdır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">3.
Sözleşmenin Konusu</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">3.1.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;İşbu
Mesafeli Satış Sözleşmesi’nin (Bundan sonra kısaca&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">“Sözleşme”</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">&nbsp;olarak anılacaktır.) konusu, Alıcı’nın Şirket’e ait</span><span lang="TR"><a href="https://kidolog.com/"><span style="color:windowtext;
text-decoration:none;text-underline:none"> talentosound.com.tr</span><span style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349;text-decoration:none;
text-underline:none">&nbsp;</span><span style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">&nbsp;</span></a></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;alan adlı
internet sitesi (Bundan sonra kısaca&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">“İnternet
Sitesi”&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">olarak anılacaktır.) ve/veya uygulaması (Bundan sonra
kısaca&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">“Uygulama”&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">olarak
anılacaktır.) üzerinden elektronik ortamda sipariş vererek satın aldığı, işbu
Sözleşme’de Şirket’e ve Şirket’in tek taraflı takdir hakkına bağlı olarak
belirlenen, İnternet Sitesi’nde ve Uygulaması’nda yazılı olan nitelikleri haiz
ve satış fiyatı belirtilen Ürün ve/veya Hizmet’in satışı ve teslimi ile ilgili
olarak 6502 sayılı Tüketicinin Korunması Hakkında Kanun&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">(“Kanun”)</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">&nbsp;ve 29188 sayılı Mesafeli Sözleşmeler Yönetmeliği&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">(“Yönetmelik”)</span></strong><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;hükümleri gereğince Tarafların hak
ve yükümlülüklerinin belirlenmesidir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">3.2.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Mesafeli
Satış Sözleşmesi’nde yer almayan her türlü bilgi ve tanım için Mesafeli Satış
Sözleşmesi’nin Şirket’teki diğer belge ve açıklamalardan oluşan ve bununla
sınırlı olmayan ekleri ile birlikte ayrılmaz parçalarından biri olan Üyelik
Sözleşmesi geçerlidir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">3.3.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Listelenen
ve İnternet Sitesi ile Uygulamada ilan edilen fiyatlar satış fiyatıdır. İlan
edilen fiyatlar ve</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">vaatler
güncelleme yapılana ve değiştirilene kadar geçerlidir. Süreli olarak ilan
edilen fiyatlar ise belirtilen süre sonuna kadar geçerlidir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">3.4.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel
Verilerin Korunmasına İlişkin&nbsp;</span><span lang="TR"><a href="https://kidolog.com/sozlesmeler/aydinlatma-metni"><span style="font-family:
&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">Aydınlatma Metni</span></a></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;işbu
Sözleşme’nin eki ve ayrılmaz parçası olup İnternet Sitesi’nde ve Uygulamada yer
almaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">3.5.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Hizmetler; (i)
Danışmanlar’ın, Ürün ve/veya Hizmet’lerini sunabilecekleri, Danışan’ların ise
Ürünler ve/veya Hizmetler’i alabilecekleri bir platformun sağlanması ve (ii)
Danışmanlar’ın bu kapsamda ancak bununla sınırlı olmamak üzere, Şirket
üzerinden, ebeveyn ve kanunen yetişkin sayılan kişilere psikoloji, çocuk
gelişimi uzmanlığı. Özel eğitim gibi alanlarda danışmanlık yapmaları (iii)
Danışan tarafından yapılan ödemelerin, ilgili Ürün ve/veya Hizmet’in Danışan
tarafından alınmasını takiben sadece ve yalnızca Danışman adına ve hesabına
alınan bedelin Danışman’a Şirket ile sözleşmesel ilişkisi kapsamında
aktarılmasının sağlanmasıdır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.
Tarafların Hak ve Yükümlülükleri</span></strong><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.1.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Alıcı, İnternet
Sitesi’nde veya Uygulama’da Sözleşme konusu Ürün ve/veya Hizmet’in temel
nitelikleri, Danışman’ın bilgileri, Danışman’ın uzmanlık alanları, satış
fiyatı,&nbsp;adedi, ödeme şekli, teslimat koşulları, randevu saatleri ve
benzeri satışa konu Ürün ve/veya Hizmet ile ilgili tüm bilgileri okuyup bilgi
sahibi olduğunu, elektronik ortamda gerekli teyidi verdiğini kabul, beyan ve
taahhüt eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.2.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket,
Danışmanlar tarafından sağlanan Ürün ve/veya Hizmetler’den, Danışman ile Şirket
arasında 4857 sayılı İş Kanunu’na tabi bir iş ilişkisinin bulunmaması ve
sağlanan Hizmet’in içeriğini kontrol etme yükümlülüğü bulunmaması sebebiyle
hiçbir zaman Ürün ve/veya Hizmetler’in kalitesinden sorumlu olmadığını, Alıcı,
kabul ve beyan eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.3.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Alıcı,
İnternet Sitesi ve Uygulama’da yer alan Aydınlatma Metni, KVKK Politikası,
Mesafeli Satış Sözleşmesi ve Üyelik Sözleşmesi’ni okuduğunu ve kabul ettiğini,
Üye Kayıt Formu’nda yer alan bilgileri eksiksiz ve doğru olarak doldurduğunu
kabul, beyan ve taahhüt eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.4.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket,
işbu Sözleşme konusu kendi tarafından sağlanan Ürün ve/veya Hizmetler’i
eksiksiz, siparişte belirtilen niteliklere uygun ve varsa garanti belgeleri,
kullanım kılavuzları işin gereği olan bilgi ve belgeler ile teslim etmeyi, her
türlü ayıptan arî olarak yasal mevzuat gereklerine göre sağlam, standartlara
uygun bir şekilde işi doğruluk ve dürüstlük esasları dâhilinde ifa etmeyi,
hizmet kalitesini koruyup yükseltmeyi, işin ifası sırasında gerekli dikkat ve
özeni göstermeyi, ihtiyat ve öngörü ile hareket etmeyi kabul, beyan ve taahhüt
eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.5.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket,
Danışman’ların Şirket üzerinden sağladıkları Hizmet ve/veya Ürünler’in
listelenmesi, Danışan’lar tarafından Hizmet ve/veya Ürünler’in bedelinin
ödenmesini takiben Danışan tarafından ödenen bedellerin ilgili Danışman’a
sözleşme ilişkisi kapsamında aktarılmasını sağlamaktadır. Bu kapsamda,
Danışman’lar, Şirket’in Danışman namına satışa sunulan Ürünler’in ve/veya
sağlanan Hizmetler’in bedelini tahsile yetkili olduğunu kabul ve taahhüt
ederler. Danışan’lar, Şirket vasıtası ile ödeme yaparak Danışman’lar ile
kurdukları sözleşme ilişkisi kapsamındaki ödeme yükümlülüklerini ifa etmiş
olurlar. Bu kapsamda Danışan, Şirket’in Danışman tarafından verilen Hizmet
ve/veya sağlanan Ürün karşılığında yapılacak ödemelerin ilgili Ürün ve/veya
Hizmet’in Danışan tarafından teslim alınmasını takiben Danışman’ın hesabına
aktarılması hususunda yetkili olduğunu ve de Hizmetler ve/veya Ürünler
karşılığında bedel ödemekle yükümlü olacağını, peşinen kabul ve taahhüt eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.6.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket
Ürün ve/veya Hizmetleri kapsamında gerçekleştirilebilecek işlemler, ürün ve
hizmetlerin satıcısı/sağlayıcısı konumundaki ve gelecekteki yapacağı anlaşmalar
doğrultusunda güncellenebilecek, arttırılıp azaltılabilecektir. Bu hususta
takdir ve değişiklik yetkisi münhasıran Şirket’e aittir. Danışan, Şirket’in
dilediği değişiklikleri ürün ve hizmetler üzerinde yapabileceğini ve Şirket’in
bu kapsamda meydana gelebilecek zararlardan hiçbir şekilde sorumlu olmadığını
kabul eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.7.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Uygulama
içerisinde gerçekleşebilecek ödeme işlemlerinin sisteminin arızalanması, kısmen
veya tamamen çalışmaz duruma gelmesi, mücbir sebep veya beklenmeyen haller vb.
nedenlerle Şirket’in sebep olmadığı veya zarar ile illiyet bağı olsa ile
Şirket’in kusurlu olmadığı durumlarda; ücret iadesi yapılmaz. Ancak, Alıcı’ya
başka bir tarihe aynı bedelle randevu imkanı tanınır. Şirket, müşteri
memnuniyetinin sağlanması adına haklarını saklı tutar. Şirket tarafından veya
Şirket’in anlaşmalı olduğu üçüncü kişiler tarafından gerçekleştirilen ve
uygulama üzerinde yapılan onarım ve güncelleme gibi durumlarda da Şirket,
doğmuş ve doğabilecek zarar ve kayıplardan ötürü sorumlu tutulamaz. Mevcut
randevunun işbu döneme rastlaması halinde, Alıcı’ya aynı bedelle başka tarihe
ilişkin randevu imkanı tanınır. Alıcı, mobil uygulamada yapılacak iyileştirme
ve diğer değişikliklerin uygulanması için mobil uygulamaya erişimin geçici
olarak engellenebileceğini kabul eder. Yine aynı kapsamda Alıcı; gerek
uygulamada gerek mobil cihaz yazılım güncellemelerinin en son versiyonunun
kullanmadığı durumlarda (güncellemelerin gerçekleştirilmediği hallerde) veya
herhangi bir mobil cihaz kaynaklı erişim sıkıntısı yaşanabilen hallerde mobil
uygulamadan gerekli verimi alamaması, kesintiler olması, teknik aksaklıklar
yaşaması ve benzeri haller sebebiyle, mevcut randevusunun işbu döneme
rastlaması halinde, Alıcı’ya aynı bedelle başka tarihe ilişkin randevu imkanı
tanınır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.8.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Alıcı
tarafından yapılan ödemeler, sadece ve yalnızca Danışman adına ve hesabına
Şirket tarafından tahsil edilmekte olduğunu, Alıcı, kabul ve beyan eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.9.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Danışman ile
Şirket arasında, 4857 sayılı İş Kanunu’na tabi bir iş ilişkisinin
bulunmamaktadır. Şirket sadece ve yalnızca Danışan ile Danışman arasında
yapılacak Hizmet’in aracılığını gerçekleştirmektedir. Bu doğrultuda,
gerçekleştirilecek Hizmetler’de, Gizlilik Politikası uyarınca, Şirket hiçbir
suretle Danışman’ın verdiği Hizmet’i denetleyemeyeceğinden ve/veya denetlemesi
beklenemeyeceğinden, Hizmet’in kalitesine ilişkin sorumluluğu bulunmadığını,
Danışan, kabul ve beyan eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.10.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Aracılık
edilen ve Danışman tarafından verilen Ürün ve/veya Hizmet’in hayatın olağan
akışı gereği fiziksel ortamda gerçekleştirilmesi azami kalitenin sağlanması
için önem teşkil etmektedir. Ancak, aracılık edilen ve Danışman tarafından
verilen Ürün ve/veya Hizmet’in sosyal ağ ve fiziki olmayan yollarla
gerçekleşmesi sebebi ve diğer sebeplerle, bu mecraya güvenlik ve kalite
açısından Şirket gerekli tüm önlemleri alır ve asgari kaliteyi sağlamaya
çalışır ancak, Alıcı’ya Ürün ve/veya Hizmet’in kalitesi konusunda garanti
vermez.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.11.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Sözleşme
konusu her bir Ürün, 30 (otuz) günlük yasal süreyi aşmamak kaydı ile Alıcı\'nın
yerleşim yeri uzaklığına bağlı olarak Alıcı veya Alıcı’nın gösterdiği adresteki
kişi ve/veya kuruluşa teslim edilir. Bu süre içerisinde edimini yerine
getirmemesi durumunda Alıcı, Sözleşme\'yi feshedebilir. İnternet sitesinde&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">“tahmini teslimat tarihi”</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;şeklinde
belirtilen ürünlerin, teslimat tarihi tahmini olarak belirtilmiş olup bu ifade
herhangi bir taahhüt içermemektedir. Bu ürünler mevzuatta belirtildiği üzere en
geç 30 (otuz) gün içerisinde Alıcı’ya teslim edilecektir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.12.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Alıcı,
profil sayfasında yer alsın veya almasın, Danışman’lara ilettiği ve/veya
görüşme sırasında belirttiği, Şirket’e verdiği, bilgilerin doğru ve eksiksiz
olduğunu kabul, beyan ve taahhüt eder. Bu bilgilerin eksik verilmesinden
kaynaklanan herhangi bir zarardan Şirket’in sorumlu olması söz konusu olamaz.
Şirket’in zararlara ilişkin talep, tazminat hallerinde hukuki ve cezai hakları
saklıdır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.13.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Alıcı’nın
üyeliğine ilişkin kullanım hakları, kullanıcı adı ve şifresi başkalarına
devredilemez. Alıcı, üyelik bilgileri dahil olmak üzere beyan etmiş olduğu tüm
bilgilerin kullanım ve yönetiminden bizzat sorumludur ve bu bilgilerin kendisi
tarafından ya da aracılığıyla üçüncü taraflarca kullanılmasına izin
vermeyecektir. Alıcı, almış olduğu Ürün ve/veya Hizmet’in görülmesi sırasında
Şirket Gizlilik Politikası’na uygun davranacağını kabul, taahhüt ve beyan eder.
Aksi hal ve davranışı sergilenmesi halinde, Şirket’in her türlü hakkı saklıdır.
Alıcı’ya ait üyelik bilgisi ve şifre ile gerçekleştirilen her işlem bizzat
Alıcı tarafından gerçekleştirilmiş kabul edilecektir. Alıcı, mevcut üyeliğini
üçüncü kişilere devredemez, kullanımına açamaz. Alıcı’nın mevcut üyeliğini
bizatihi kendisinin kullanmadığının Şirket tarafından tespit edilmesi halinde,
Şirket haklı neden ve ihbarda bulunmaksızın derhal fesih hakkına sahip olup
Şirket’in hukuki ve cezai tüm hakları saklıdır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.14.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket,
Alıcı’ya sağlanan Hizmet karşılığında Danışmanlar’a verilecek Hizmet Bedeli’nde
ve/veya işbu aracılık hizmeti gereğince tahsis ettiği Hizmet Bedeli’nde
değişiklik yapabilir. Hizmet Bedeli’ne ilişkin değişiklikler, değişikliğin ilan
edildiği andan itibaren geçerlilik kazanacak ve herhangi bir kampanyanın
bulunması halinde, kampanyanın sona erme tarihine kadar geçerli olacaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.15.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket,
Danışanlar’dan, Danışmanlar adına tahsil edilecek ödemeler dışında, hiçbir
koşul altında Danışanlar’ı ve/veya Danışmanlar’ı temsil etmemektedir. Şirket’in
Danışan ve Danışman arasında ortaya çıkabilecek herhangi bir uyuşmazlık ve
benzeri durumda Danışman ve Danışan arasındaki iletişimi sağlamak da dahil
olmak üzere herhangi bir yükümlülüğü olmadığı gibi, Danışan ve Danışman
arasında herhangi bir uyuşmazlık çıkması halinde Şirket, söz konusu uyuşmazlığa
ilişkin husumeti bulunmamaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.16.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket’in
her ne sebeple olursa olsun Danışan ve Danışman arasındaki ilişkiyi düzenleme,
sağlama, kurma veya sair şekilde oluşturma veyahut da hakemlik yapma
yükümlülüğü yoktur. Danışan ve Danışman, aralarındaki hizmet ve/veya satış
ilişkisinden bizzat ve şahsen sorumludur. Danışan ve Danışman, Şirket’in bu
konuda herhangi bir sorumluluğu bulunmadığını peşinen kabul ve beyan ederler.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.17.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Alıcı,
Danışmanlar ve Ziyaretçiler, Şirket’in ilgili bölümlerine girilen hiçbir
bilgiyi kontrol etmekle yükümlü olmadığını ve kendisine verilen bilgilerin
doğruluğunu hiçbir koşul altında taahhüt etmediğini peşinen kabul, beyan ve
taahhüt eder. Bununla birlikte Ziyaretçiler, Hizmetler’in talep edilen şekilde
verilebilmesi için Şirket’e ve/veya Danışmanlar’a kendilerine ait, gerçek ve
eksiksiz bilgileri vermekle yükümlü olduklarını; aksi takdirde, satın aldıkları
Hizmet ve/veya Ürünler’in verdikleri adrese ulaşması veya Hizmet’in
sağlanamaması da dahil olmak, ancak bununla sınırlı olmamak üzere çeşitli
sorunların doğabileceğini kabul ederler. Bu kapsamda, Ziyaretçiler Şirket
üzerinden ve/veya Danışmanlar tarafından kendilerinden talep edilen bilgileri
tam, doğru ve gerçeğe uygun şekilde vermekle yükümlü olup söz konusu bilgileri
yanlış vermelerinden dolayı oluşan zararlardan Şirket’in sorumluluğu
bulunmamakla birlikte, Şirket’in her türlü zararını Alıcı, karşılamakla
yükümlüdür.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.18.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Alıcı’nın
işbu Sözleşme konusu ürünü Alıcı’dan başka kişi veya kuruluşa teslim edilmesini
talebinde, teslim edilecek kişi veya kuruluşun teslimatı kabul etmemesinden
Şirket sorumlu tutulamayacaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.19.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Alıcı,
Sözleşme konusu Ürün’ün teslimatı için işbu Sözleşme’yi elektronik ortamda
teyit edeceğini, herhangi bir nedenle Sözleşme konusu ürün bedelinin ödenmemesi
ve/veya banka, finans kuruluşu kayıtlarında iptal edilmesi halinde, Şirket’in
sözleşme konusu ürünü teslim yükümlülüğünün sona ereceğini kabul, beyan ve
taahhüt eder. Herhangi bir sebeple banka ve/veya finans kuruluşu tarafından
başarısız kodu gönderilen ancak banka ve/veya finans kuruluşu tarafından
Şirket’e yapılan ödemelere ilişkin Alıcı, Şirket’in herhangi bir sorumluluğunun
bulunmadığını kabul, beyan ve taahhüt eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.20.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Alıcı,
Sözleşme konusu Ürün’ün Alıcı veya Alıcı’nın gösterdiği adresteki kişi ve/veya
kuruluşa tesliminden sonra Alıcı\'ya ait kredi kartının yetkisiz kişilerce
haksız kullanılması sonucunda Sözleşme konusu ürün bedelinin ilgili banka veya
finans kuruluşu tarafından Şirket’e ödenmemesi halinde, Alıcı Sözleşme konusu
ürünü 3 (üç) gün içerisinde nakliye gideri Alıcı’ya ait olacak şekilde Şirket’e
iade edeceğini kabul, beyan ve taahhüt eder. Alıcı, Sözleşme konusu Hizmet’in
gerçekleştirilmesinden önce bedeli öder. Sözleşme konusu Hizmet’in
gerçekleştirilmesinden önce yapılan ödeme Alıcı\'ya ait kredi kartının yetkisiz
kişilerce haksız kullanılması sonucunda Sözleşme konusu ürün bedelinin ilgili
banka veya finans kuruluşu tarafından Şirket’e ödenmemesi halinde, Hizmet
gerçekleştirilmez. Hizmet gerçekleştirildikten sonra işbu hususun ortaya
çıkması halinde, Alıcı, Sözleşme konusu Hizmet’e karşın gerçekleştireceği
ödemeyi 3 (üç) gün içerisinde, tüm ortaya çıkacak giderler Alıcı’ya ait olacak
şekilde Şirket’e ödeyeceğini kabul, beyan ve taahhüt eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.21.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket;
yapılan herhangi bir işleme harcama itirazı bildirimi gelmesi ve/veya ödeme
hizmeti sağlayan kuruluşun yapılan işlem aleyhine yapılan itirazı kabul etmesi
ve bu kapsamda itirazın kesinleşmesi veyahut işlemin şüpheli bir işlem olması;
şüpheli işlemlerle ilgili Danışan’a Şirket tarafından ulaşılamaması, söz konusu
işlemin Danışan’ın ve Şirket’in genel işlem tutarı ortalamasının üzerinde
olması veyahut da işlemin geçerliliği ve hukukiliğine ilişkin herhangi bir
nedenle şüphe uyandırması halinde, ilgili işleme ilişkin ödenen ücretin
Danışan’a aktarılması için Danışan’dan ek bilgi ve belgeler talep edebilir. Söz
konusu ek bilgi ve belgeler tamamlanıncaya ve/veya Danışan tarafından yapılan
ödeme ilgili işleme ilişkin şüphe ortadan kalkıncaya değin Danışan’ın hesabına
aktarılmayabilir. Bu kapsamda, Danışan’dan talep edilen bilgi ve belgelerin
Şirket’e iletilme süresinin dolması durumunda, Danışan tarafından yapılan
ödeme, Şirket tarafından bloke edilebilir veya ilgili siparişe ilişkin bedelin
Danışan ya da Bankasına iade etmesi halinde, Şirket ödediği bedele ilişkin
haklarını saklı tutar. Bu hususta karar verme yetkisi yalnızca ve sadece
Şirket’e ait olup belirtilen işlem yalnızca Danışan’ın güvenliğini sağlamak
maksadıyla kullanılmaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.22.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket,
Taraflar’ın iradesi dışında gelişen, önceden öngörülemeyen ve Taraflar’ın
borçlarını yerine getirmesini engelleyici ve/veya geciktirici hallerin oluşması
gibi mücbir sebep halleri nedeni ile Sözleşme konusu ürünü süresi içinde teslim
edemez ise durumu Alıcı\'ya bildireceğini kabul, beyan ve taahhüt eder. Alıcı da
siparişin iptal edilmesini, Sözleşme konusu ürünün varsa emsali ile
değiştirilmesini ve/veya teslimat süresinin engelleyici durumun ortadan
kalkmasına kadar ertelenmesini Şirket’ten talep etme hakkını haizdir. Alıcı
tarafından siparişin iptal edilmesi halinde Alıcı’nın nakit ile yaptığı
ödemelerde, ürün tutarı 14 (on dört) gün içinde kendisine nakden ve defaten
ödenir. Alıcı’nın kredi kartı ile yaptığı ödemelerde ise ürün tutarı, siparişin
Alıcı tarafından iptal edilmesinden sonra 7 (yedi) gün içerisinde ilgili
bankaya iade edilir. Alıcı, Şirket tarafından kredi kartına iade edilen tutarın
banka tarafından Alıcı hesabına yansıtılmasına ilişkin ortalama sürecin 2 (iki)
ile 3 (üç) haftayı bulabileceğini, bu tutarın bankaya iadesinden sonra
Alıcı’nın hesaplarına yansıması halinin tamamen banka işlem süreci ile ilgili
olduğundan, Alıcının, olası gecikmeler için Şirket’i sorumlu tutamayacağını
kabul, beyan ve taahhüt eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.23.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Alıcı,
işbu Sözleşme konusu Ürün ve/veya Hizmet’i teslim almadan önce muayene edecek;
ezik, kırık, ambalajı yırtılmış vb. hasarlı ve ayıplı Ürün ve/veya Hizmet’i
kargo şirketinden teslim almayacaktır. Teslim alınan Ürün ve/veya Hizmet’in
hasarsız ve sağlam olduğu kabul edilecektir. Teslimden sonra Ürün ve/veya
Hizmet’in özenle korunması borcu Alıcı’ya aittir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.24.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;İşbu
Sözleşme’ye konu Ürünün Alıcı’ya tesliminden evvel, siparişte kullanılan kredi
kartına ilişkin güvenlik açığı tespit edilmesi halinde Şirket, kredi kartı
hamiline ilişkin kimlik ve iletişim bilgilerini, siparişte kullanılan kredi
kartının bir önceki aya ait ekstresini yahut kart hamilinin bankasından kredi
kartının kendisine ait olduğuna ilişkin yazıyı ibraz etmesini Alıcı’dan talep
edebilir. Alıcı’nın talebe konu bilgi/belgeleri temin etmesine kadar geçecek
sürede sipariş henüz kargoya verilmemiş ise dondurulacak, kargoya verilmiş ise
kargonun teslim edilmemesi konusunda kargo şirketine talep iletilecek olup
mezkur taleplerin 24 (yirmi dört) saat içerisinde karşılanmaması halinde ise
Şirket, siparişi iptal etme hakkını haizdir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.25.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Alıcı,&nbsp;</span><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;">talentosound.com.tr</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;alan adlı
internet sitesinde veya Uygulama’da sunulan Ürün ve/veya Hizmetler’in sipariş
edebilmek için talep edilen bilgileri girmek zorundadır. Alıcı her zaman ve
ayrıca hiçbir gerekçe göstermeksizin üyeliğini sona erdirebilir. Alıcı,
Şirket’e ait İnternet Sitesi’ne veya Uygulama’ya üye olurken verdiği kişisel ve
diğer sair bilgilerin gerçeğe uygun olduğunu, Şirket’in bu bilgilerin gerçeğe
aykırılığı nedeniyle uğrayacağı tüm zararları Şirket’in ilk bildirimi üzerine
derhal, nakden ve defaten tazmin edeceğini beyan ve taahhüt eder. Alıcı,
bilgilerinin değişmesi halinde üyelik bilgilerini güncellemekle yükümlüdür.
Konuya ilişkin lütfen&nbsp;</span><span lang="TR"><a href="https://kidolog.com/sozlesmeler/uyelik-sozlesmesi"><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">Üyelik
Sözleşmesi’ni</span></a></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">&nbsp;okuyun.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.26.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Alıcı, Şirket’e
ait İnternet Sitesi’ni veya Uygulama’yı kullanırken yasal mevzuat hükümlerine
riayet etmeyi ve bunları ihlal etmemeyi baştan kabul, beyan ve taahhüt eder.
Aksi takdirde, doğacak tüm hukuki ve cezai yükümlülükler tamamen ve münhasıran
Alıcı’yı bağlayacaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.27.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Alıcı,
Şirket’e ait İnternet Sitesi’ni veya Uygulama’yı hiçbir şekilde kamu düzenini
bozucu, genel ahlaka aykırı, başkalarını rahatsız ve taciz edici şekilde,
yasalara aykırı bir amaç için, başkalarının maddi ve manevi haklarına tecavüz
edecek şekilde kullanamaz. Ayrıca, İnternet Sitesi’ne veya Uygulama’ya üye
sıfatıyla Alıcı başkalarının hizmetleri kullanmasını önleyici veya zorlaştırıcı
faaliyet (spam, virus, truva atı, vb.) işlemlerde bulunamaz. Bu işlemlerde
bulunduğu takdirde doğacak zararları Şirket’in ilk bildirimi üzerine derhal,
nakden ve defaten tazmin edeceğini beyan ve taahhüt eder. Mobil uygulamanın
kullanıldığı mobil cihazın; tüm yazılımlarını (işletim sistemi dahil olmak
üzere) güncel tutma ve mobil cihazı en güncel AntiVirüs ve AntiSpyWare
programlarıyla yetkisiz erişimlere karşı koruma, şifre bilgilerine internet
üzerinden kendisi dışındaki kişilerin erişmesini engellemek için mobil cihazın
güvenliğini temin etme gibi mobil cihazın yetkisiz erişimlere karşı güvenliğine
ilişkin tüm teknik tedbirlerin alınması münhasıran Alıcı’nın sorumluluğundadır.
Böyle bir durumda Alıcı, tüm zararlardan münhasıran sorumlu olacak ve Şirket’e
bu kapsamda herhangi bir talep iletemeyecektir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.28.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;İşbu
Sözleşme içerisinde sayılan maddelerden bir ya da birkaçını ihlal eden Alıcı
işbu ihlal nedeniyle cezai ve hukuki olarak şahsen sorumlu olup Şirket’e bu
ihlallerin hukuki ve cezai sonuçlarından ari tutacaktır. Ayrıca işbu ihlal
nedeniyle, olayın hukuk alanına intikal ettirilmesi halinde, Şirket’in Alıcı’ya
karşı Sözleşme’ye uyulmamasından dolayı tazminat talebinde bulunma hakkı
saklıdır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.29.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket,
Sözleşme konusu Ürünün sağlam, eksiksiz, İnternet Sitesi’nde veya Uygulama’da
yer alan niteliklerine uygun ve varsa garanti belgeleri ve kullanım kılavuzları
ile teslim edilmesinden sorumludur. Garanti belgesi ile satılan ürünlerden olan
veya olmayan ürünlerin arızalı veya bozuk olanlar, garanti şartları içinde
gerekli onarımın yapılması için nakliye masrafları Alıcı’ya ait olmak üzere
Şirket’e gönderebilir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.30.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışan,
Şirket’in yasal mevzuat gereği resmi makamlara açıklama yapmakla yükümlü olduğu
durumlarda, resmi makamlarca usulü dairesinde bu bilgilerin talep edilmesi
halinde Danışan’a ait, Şirket Hizmetleri dahilinde edinilen bilgileri resmi
makamlara veya Şirket’in ürün ve hizmetlerin ifasına yönelik olarak açıklamaya
yetkili olacaklarını, bu hallerin Şirket Gizlilik Politikalarına ve KVKK ile
ilgili mevzuata aykırılık teşkil ettiği şeklinde yorumlanmayacağını ve bu
sebeple Şirket’ten her ne nam altında olursa olsun tazminat talep
edilemeyeceğini kabul eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.31.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışan,
üyelik bilgileri ile kendisine ait diğer kişisel verilerin, 6698 sayılı Kişisel
Verilerin Korunması Kanunu ve ilgili mevzuat kapsamında Veri Sorumlusu sıfatı
ile Şirket tarafından işlenmesine&nbsp;</span><span lang="TR"><a href="https://kidolog.com/sozlesmeler/aydinlatma-metni"><span style="font-family:
&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">Aydınlatma Metni</span></a></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;kapsamında
muvafakat vermiş olup bu verilerin işlendiğini bilir ve kabul eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.32.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışan,
Ürün ve/veya Hizmetler’i hukuka ve yürürlükteki mevzuata uygun bir şekilde
edinmeyi kabul ve taahhüt eder. Danışan’ın, Ürün ile ilgili ve/veya Hizmetler’i
kullanırken yapacağı her işlem ve eylemdeki hukuki ve cezai sorumluluktan
Danışmanlar’ın bizzat ve münhasıran sorumlu olduğunu, Şirket’in yalnızca ve
sadece 6502 sayılı Tüketicinin Korunması Hakkında Kanun ve 6563 sayılı
Elektronik Ticaret Düzenlenmesi Hakkında Kanun kapsamında mesafeli sözleşme
kurulmasına aracılık eden ve Aracı Hizmet Sağlayıcı sıfatını haiz olduğunu
bilir, kabul ve beyan eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.33.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket,
İnternet Sitesi’ndeki fiyatlar ve ürün, renk, materyal çeşitleri ile tasarımlar
ve de promosyonlar ve kampanyalar üzerinde dilediği zaman, ayrıca herhangi bir
bilgilendirme yapma zorunluluğu bulunmaksızın değişiklik yapma ve/veya
belirtilen tüm hususları iptal etme, silme, kullanıma kapatma hakkını saklı
tutar. Alıcı, bu değişiklikler veya iptallerden dolayı uğrayacağı doğrudan
ve/veya dolaylı zararlar için Şirket’ten her ne nam altında olursa tazminat
talep etmeyeceğini peşinen kabul ve beyan eder. Ancak Şirket, İnternet
Sitesi’ndeki promosyon ve kampanyalar üzerinde değişiklik yaptığını İnternet
Sitesi’nde yeni bir promosyon veya kampanya ile duyurması gerekmektedir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.34.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket,
sözleşmenin ihlali, haksız fiil, ihmal veya diğer sebepler neticesinde; işlemin
kesintiye uğraması, hata, ihmal, kesinti, silinme, kayıp, işlemin veya
iletişimin gecikmesi, bilgisayar virüsü, iletişim hatası, hırsızlık, imha veya
izinsiz olarak kayıtlara girilmesi, değiştirilmesi veya kullanılması hususunda
herhangi bir sorumluluk kabul etmemektedir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">5.
Kullanım Koşulları</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">5.1.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;İşbu
Sözleşme’nin tarafları Şirket ile Alıcı’dır. Bu kapsamda, işbu Sözleşme’nin
yerine getirilmesi ile ilgili tüm yükümlülük ve sorumluluklar Sözleşme’de
kararlaştırılan usul, esaslara ve mevzuata göre belirlenmektedir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">5.2.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Alıcı’nın
İnternet Sitesi’ne veya Uygulama’ya girilmesi, sitenin ya da sitedeki
bilgilerin ve diğer verilerin programların vs. kullanılması sebebiyle,
sözleşmenin ihlali, haksız fiil, ya da başkaca sebeplere binaen, doğabilecek
doğrudan ya da dolaylı hiçbir zarardan Talento Sound Eğitim ve Danışmanlık
Hizmetleri Ticaret Limited Şirketi sorumlu değildir. Şirket, sözleşmenin
ihlali, haksız fiil, ihmal veya diğer sebepler neticesinde; işlemin kesintiye
uğraması, hata, ihmal, kesinti hususunda herhangi bir sorumluluk kabul etmez.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">5.3.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket;
aracılık hizmetlerinin sürekliliğini sağlama, ileride doğacak teknik zaruretler
veya mevzuata uyum sağlanması amacıyla Sözleşmeyi Alıcılar / Danışanlar
aleyhine olmamak kaydıyla ve tek taraflı olarak değiştirme ya da tadil etme
hakkına sahiptir. Şirket, herhangi bir değişiklik olması halinde güncel
kullanım şartlarını aynı link altında yeni tarih güncellemesi ile internet
sitesinde yayınlayacak, gerek görmesi halinde elektronik posta veya mobil
bildirim ile kullanıcılarına bildirilecek ve onayına sunacaktır. Yenilenmiş
güncel Sözleşme, internet sitesin yayınlandığı andan itibaren geçerli olacak ve
internet sitesinin veya hizmetlerinin kullanımı o andan itibaren yenilenmiş
Sözleşme şartlarına tabi olacaktır. Danışan, Ürün ve/veya Hizmetler’deki
değişikliğe veya kaldırılmasına ilişkin talep ve/veya itirazlarını 15 gün
içerisinde iletisim@talentosound.com Şirket yetkili mail adresine iletme
hakkına sahiptir. Talep ve/veya itirazlara ilişkin değerlendirme hakkı yalnızca
ve sadece Şirket’e aittir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">5.4.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;İnternet
Sitesi veya Uygulama Şirket\'in kontrolü altında olmayan başka internet
sitelerine bağlantı veya referans içerebilir. Şirket, bu sitelerin içerikleri
veya içerdikleri diğer bağlantılardan sorumlu değildir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">5.5.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışan,
Şirket’in sunduğu altyapı ve Şirket aracılığı ile Ürün ve/veya Hizmetler’i
Danışmanlar’dan alır. Danışan’ın satın alma talebi, Ürün ve/veya Hizmet’e
ilişkin Şirket tarafından hazırlanan, Şirket ya da Şirket dışındaki
platformlarda belirtilen koşulları kabul ederek Danışman ile arasında bir
hizmet ve/veya satış akdinin Ürün’ü ve/veya Hizmet’i satın alma talebiyle
kurulduğu anlamına gelmektedir. Danışan, bu satın alma talebiyle ilgili Ürün’ü
ve/veya Hizmet’i satın almayı kabul ve taahhüt eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">5.6.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışan,
kendisine tanınan gün ve saatte tüm hakları sadece ve yalnızca Şirket’e ait
olan ve görüşmenin yapılmasına aracılık eden “TalentoMeet” platformu üzerinden
önceden belirlenmiş kurallara uygun olarak Hizmet’i alır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">5.7.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışanlar,
ihtiyaçları doğrultusunda, kendilerine en yakın buldukları uzmanı seçmekte
özgürdürler.&nbsp; Danışanlar, Şirket’in Websitesi ve/veya Mobil uygulaması ile
Hizmet alacağı Danışman’ı seçer, Danışman’ın da uygun olduğu tarih ve saate
göre randevu zamanını belirler, kredi kartı ve/veya Şirket’in belirleyeceği
diğer ödeme yöntemleri ile satın alır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">5.8.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışan,
Danışmanlar’dan aldıkları Ürün ve/veya Hizmetler sırasında kanuna aykırı eylem
ve davranışlarda bulundukları veya bulunacaklarını ifade etmeleri ve/veya
kanaat uyandırmaları halinde, Danışmanları’nın ve Şirket’in işbu durumu yetkili
idari ve adli mercilere bildirebileceklerini kabul eder ve kanuna aykırılık
nedeniyle yapılan ihbar/şikayet sebebiyle Şirket ve/veya Danışmanlar’ın
sorumluluğu bulunmamakta olduğunu bilir, işbu husus sebebiyle gizliliğin ihlal
edildiğini ileri süremez. Hizmet’in görülmesi sırasında, TalentoMeet üzerinden
herhangi bir şekilde kayıt alınmayacağını, tamamen gizli ve 3.kişilerin
Danışman tarafından davet edilmediği sürece yalnızca kendisi ile Danışman
arasında gerçekleşeceğini, kabul, beyan ve taahhüt eder. Aksi taktirde, cezai
ve hukuki alanda sorumlu olacağını kabul, beyan ve taahhüt eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">5.9.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışan,
Hizmet’in görülmesi sırasında ve/veya öncesinde ve/veya sonrasında hiçbir
suretle Danışman’ın özel bilgilerini (ad, soyad, adres, telefon numarası v.b.)
talep etmeyeceğini, Hizmet’in sağlanmasında Şirket’i egale edici eylem ve
davranışlarda bulunmayacağını, Hizmet’i yalnızca ve sadece Şirket aracılığıyla
alacağını kabul ve taahhüt eder. Aksi Şirket tarafından tespit edildiği
taktirde, Şirket’in her türlü hakkı saklı kalarak, Danışan’ın üyeliğini sebep
göstermeksizin ve ihbarda bulunmaksızın geçici veya sürekli olarak askıya
alabilir, belirlenecek sair sınırlamalara tabi tutabilir veyahut işbu Üyelik
Sözleşmesi’ni tek taraflı olarak feshedebilir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">5.10.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışan,
işbu Ürün ve/veya Hizmet’i alırken, 18 yaşından büyük olduğunu ve Sözleşme’yi
yapmak için gereken fiil ehliyetine sahip olduğunu; bahsi geçen Ürün ve
Hizmetler’in kendisi tarafından alınmasına karşı herhangi bir hukuki veya fiili
engel bulunmadığını; yürürlükteki tüm mevzuata uygun ve tüm hukuki sorumluğunun
kendisine ait olduğunu; Şirket’in Ürün ve Hizmetler’in arzı ve satışı
konusunda, hiçbir sıfat altında kendisiyle doğrudan ve dolaylı ilişki içinde
olmadığını kabul ve taahhüt eder. Danışan’ın sayılan hususlara aykırılığının
tespiti halinde ve Danışan’ın işlemleriyle ilgili Şirket’e Danışmanlar’dan 3
kez şikayet ulaşması durumunda Şirket’in her türlü hakkı saklı kalarak,
Danışan’ın üyeliğini sebep göstermeksizin ve ihbarda bulunmaksızın geçici veya
sürekli olarak askıya alabilir, belirlenecek sair sınırlamalara tabi tutabilir
veyahut işbu Üyelik Sözleşmesi’ni tek taraflı olarak feshedebilir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">5.11.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket;
Şirket ürünleri, Şirket ticari markaları, görünümü, İnternet Sitesi’nin genel
görünüm ve dizaynı ile İnternet Sitesi’ndeki tüm bilgi, resim, Talento Sound
markası,</span><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:
&quot;Segoe UI&quot;"> talentosound.com.tr</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">&nbsp;&nbsp;alan adı, logo, ikon, demonstratif, yazılı,
elektronik, grafik veya makinede okunabilir şekilde sunulan teknik veriler,
bilgisayar yazılımları, uygulanan satış sistemi, iş metodu ve iş modeli de
dahil tüm materyallerin ("Materyaller") ve bunlara ilişkin fikri ve
sınai mülkiyet haklarının sahibi veya lisans sahibidir ve yasal koruma
altındadır. İşbu Sözleşme altında Alıcı Ürün’ü ve/veya Hizmet’i satın almakla
hiçbir yetkinin kendisine devredilmemiş olduğunu kabul, beyan ve taahhüt eder.
İnternet Sitesinde bulunan hiçbir Materyal; önceden izin alınmadan ve kaynak
gösterilmeden, kod ve yazılım da dahil olmak üzere değiştirilemez,
kopyalanamaz, çoğaltılamaz, başka bir lisana çevrilemez, yeniden yayımlanamaz,
başka bir bilgisayara yüklenemez, postalanamaz, iletilemez, sunulamaz ya da
dağıtılamaz. Internet sitesinin bütünü veya bir kısmı başka bir internet
sitesinde izinsiz olarak kullanılamaz. Aksine tüm durumlarda hukuki ve cezai
sorumluluk ihlal eden tarafa ait olup Şirket’in tüm hakları saklıdır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">5.12.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışan,
Ürün ve/veya Hizmetler’i çoğaltmayacağını, kopyalamayacağını, dağıtmayacağını,
işlemeyeceğini kabul ve taahhüt eder. Şirket’in söz konusu Ürün ve/veya
Hizmetler’den herhangi bir hukuki veya sözleşmesel sorumluluğu bulunmamaktadır.
Danışmanlar tarafından Şirket’e eklenen, gerçekleştirilen eylemler veya başka
yollarla Şirket ile doğrudan ve/veya dolaylı zarara uğratacak nitelikte,
sınırlamaları aşan veya ihlal eden Ürün ve/veya Hizmetler’den, devlet, yargı
veya hak sahibi üçüncü şahıslar tarafından yöneltilen tüm hukuki ve cezai
yaptırımlardan bizzat Danışmanlar’ın sorumlu olduğunu, Danışan bilir, kabul ve
beyan eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6.
İptal ve İade Koşulları</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6.1.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket,
Sözleşme\'den doğan ifa yükümlülüğünün süresi dolmadan Alıcı’yı bilgilendirmek
ve açıkça onayını almak suretiyle eşit kalite ve fiyatta farklı bir ürün
tedarik edebilir. Danışan bedeli ödeyerek satın aldığı Hizmet’i, randevu
saatinden 3 saat öncesinde Şirket’e yazılı bildirimde bulunup Şirket tarafından
iptalin onaylanması ile Hizmet’in iptalini sağlayabilir. Şirket, her türlü
hakkı saklı kalmakla birlikte, Danışan’ın haklı nedeni olmaksızın ___ kez ayrı
ayrı randevusunu kusuru ile iptal etmesi halinde, Danışan’a Hizmet
vermeyebilir, üyeliğini sonlandırabilir, üyeliğini dondurabilir. Bu takdirde,
Danışan, Şirket’in herhangi bir zararı oluşması halinde tüm zararını
karşılamakla yükümlü olacağını, peşinen kabul ve taahhüt eder. Danışan, randevu
saatine geç kalınmasının veya cevapsız bırakılmasının sorumluluğu münhasıran
kendisinde olduğunu, ek süre isteyemeyeceğini kabul, taahhüt ve beyan eder.
Şirket her zaman randevuyu iptal etme hakkına sahip olup ücret iadesini en geç
4 gün içinde Danışan’a gerçekleştirecektir. Şirket web uygulamasında
listelendiği halde satışa, randevu saati açısından Şirket ve/veya Danışmanın
kusuru ile sunulamaması veya Danışanın satın aldığı bir Hizmetin randevu saati
itibariyle Danışman’ın veya Şirket’in kusuru ile verilmemesi durumlarında,
Şirket, Danışan’a bilgi vermek kaydı ile hizmetin para iadesi yapılarak iptali
sağlayacaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6.2.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Uygulama
içerisinde gerçekleşebilecek ödeme işlemlerinin sisteminin arızalanması, kısmen
veya tamamen çalışmaz duruma gelmesi, mücbir sebep veya beklenmeyen haller vb.
nedenlerle Şirket’in sebep olmadığı veya zarar ile illiyet bağı olsa ile
Şirket’in kusurlu olmadığı durumlarda; ücret iadesi yapılmaz. Ancak, Danışan’a
başka bir tarihe aynı bedelle randevu imkanı tanınır. Şirket, müşteri
memnuniyetinin sağlanması adına haklarını saklı tutar. Şirket tarafından veya
Şirket’in anlaşmalı olduğu üçüncü kişiler tarafından gerçekleştirilen ve
uygulama üzerinde yapılan onarım ve güncelleme gibi durumlarda da Şirket,
doğmuş ve doğabilecek zarar ve kayıplardan ötürü sorumlu tutulamaz. Mevcut
randevunun işbu döneme rastlaması halinde, Danışan’a aynı bedelle başka tarihe
ilişkin randevu imkanı tanınır. Danışan, mobil uygulamada yapılacak iyileştirme
ve diğer değişikliklerin uygulanması için mobil uygulamaya erişimin geçici
olarak engellenebileceğini kabul eder. Yine aynı kapsamda Danışan; gerek
uygulamada gerek mobil cihaz yazılım güncellemelerinin en son versiyonunun
kullanmadığı durumlarda (güncellemelerin gerçekleştirilmediği hallerde) veya
herhangi bir mobil cihaz kaynaklı erişim sıkıntısı yaşanabilen hallerde mobil
uygulamadan gerekli verimi alamaması, kesintiler olması, teknik aksaklıklar
yaşaması ve benzeri haller sebebiyle, oluşan sorunlardan Şirket’in
sorumluluğunun bulunmadığını kabul ve beyan eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6.3.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Alıcı
bunlar dışında, Hizmet’in ve/veya Ürün’ün vaat edilenden farklı, ayıplı, noksan
çıksın ya da çıkmasın 6502 sayılı Tüketicinin Korunması Hakkında Kanun ve 6563
sayılı Elektronik Ticaret Düzenlenmesi Hakkında Kanun nezdinde 14 (on dört) gün
içerisinde ürünü geri göndermek suretiyle bedelin iadesini talep edebilir ve bu
durumda Alıcı tarafından gönderilen bedel Alıcı’ya iade edilir. 14 (on dört)
günlük süre, mal teslimine ilişkin sözleşmelerde, malın teslim alındığı gün,
hizmet ifasına ilişkin sözleşmelerde ise sözleşmenin kurulduğu gün başlar.
Ancak Alıcı, sözleşmenin kurulduğu an ile malın teslimi arasında da cayma
hakkını kullanabilir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6.3.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Satın
aldığınız ürünü, kargodan teslim aldığınız günden itibaren 14 (on dört) gün
içerisinde "Talento Sound Eğitim ve Danışmanlık Hizmetleri Ticaret Limited
Şirketi" adına, "Altunizade Mah. Üniversite Sk. No:8 Üsküdar/İSTANBUL"
adresine aşıdaki koşullar dahilinde iade edebilirsiniz. İade edeceğiniz ürüne
ait var ise, hediye olarak verilen promosyonlu, kampanyalı ürünlerin de aynı
anda iade edilmesi gerekmektedir. İade kargo masrafları Alıcı’ya aittir. İade
gerçekleştirmek istediğinizde online@TALENTOSOUND.com adresine bilgilendirme
maili atarak işlemlerinizi hızlandırabilirsiniz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6.4.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket,
Taraflar’ın iradesi dışında gelişen, önceden öngörülemeyen ve Taraflar’ın
borçlarını yerine getirmesini engelleyici ve/veya geciktirici hallerin oluşması
gibi mücbir sebep halleri nedeni ile Sözleşme konusu ürünü süresi içinde teslim
edemez ise durumu Alıcı\'ya bildireceğini kabul, beyan ve taahhüt eder. Alıcı da
siparişin iptal edilmesini, Sözleşme konusu ürünün varsa emsali ile
değiştirilmesini ve/veya teslimat süresinin engelleyici durumun ortadan
kalkmasına kadar ertelenmesini Şirket’ten talep etme hakkını haizdir. Alıcı
tarafından siparişin iptal edilmesi halinde Alıcı’nın nakit ile yaptığı
ödemelerde, ürün tutarı 14 (on dört) gün içinde kendisine nakden ve defaten
ödenir. Alıcı’nın kredi kartı ile yaptığı ödemelerde ise ürün tutarı, siparişin
Alıcı tarafından iptal edilmesinden sonra 7 (yedi) gün içerisinde ilgili
bankaya iade edilir. Alıcı, Şirket tarafından kredi kartına iade edilen tutarın
banka tarafından Alıcı hesabına yansıtılmasına ilişkin ortalama sürecin 2 (iki)
ile 3 (üç) haftayı bulabileceğini, bu tutarın bankaya iadesinden sonra
Alıcı’nın hesaplarına yansıması halinin tamamen banka işlem süreci ile ilgili
olduğundan, Alıcının, olası gecikmeler için Şirket’i sorumlu tutamayacağını
kabul, beyan ve taahhüt eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6.5.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Uygulama
içerisinde gerçekleşebilecek ödeme işlemlerinin sisteminin arızalanması, kısmen
veya tamamen çalışmaz duruma gelmesi, mücbir sebep veya beklenmeyen haller vb.
nedenlerle Şirket’in sebep olmadığı veya zarar ile illiyet bağı olsa ile
Şirket’in kusurlu olmadığı durumlarda; ücret iadesi yapılmaz. Ancak, Alıcı’ya
başka bir tarihe aynı bedelle randevu imkanı tanınır. Şirket, müşteri
memnuniyetinin sağlanması adına haklarını saklı tutar. Şirket tarafından veya
Şirket’in anlaşmalı olduğu üçüncü kişiler tarafından gerçekleştirilen ve
uygulama üzerinde yapılan onarım ve güncelleme gibi durumlarda da Şirket,
doğmuş ve doğabilecek zarar ve kayıplardan ötürü sorumlu tutulamaz. Mevcut
randevunun işbu döneme rastlaması halinde, Alıcı’ya aynı bedelle başka tarihe
ilişkin randevu imkanı tanınır. Alıcı, mobil uygulamada yapılacak iyileştirme
ve diğer değişikliklerin uygulanması için mobil uygulamaya erişimin geçici
olarak engellenebileceğini kabul eder. Yine aynı kapsamda Alıcı; gerek
uygulamada gerek mobil cihaz yazılım güncellemelerinin en son versiyonunun
kullanmadığı durumlarda (güncellemelerin gerçekleştirilmediği hallerde) veya
herhangi bir mobil cihaz kaynaklı erişim sıkıntısı yaşanabilen hallerde mobil
uygulamadan gerekli verimi alamaması, kesintiler olması, teknik aksaklıklar
yaşaması ve benzeri haller sebebiyle, mevcut randevusunun işbu döneme
rastlaması halinde, Alıcı’ya aynı bedelle başka tarihe ilişkin randevu imkanı
tanınır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6.6.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Ambalajlı
ürünlerde cayma hakkının kullanılması, ürünün ambalajının açılmamış, bozulmamış
ve ürünün kullanılmamış olması şartına bağlıdır. İadenizin iade koşullarına
uygun olmaması durumunda ise ilgili ürün, adresinize alıcı ödemeli kargo ile
gönderilecektir. Ürününüzün durumu mail veya cep telefonu ile
bilgilendirilecektir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6.7.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Satın
alınan Ürün ve/veya Hizmet,&nbsp;</span><span lang="TR"><a href="https://kidolog.com/"><span style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">talentosound.com</span></a></span><span class="MsoHyperlink"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:
&quot;Segoe UI&quot;;color:#007BFF">.tr</span></span><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;tarafından teslim alındıktan sonra
ambalajı, aksesuarları, faturası kontrol edilecektir. İade edeceğiniz ürünün
faturası kurumsal ise, iade ederken kurumun düzenlemiş olduğu iade faturasıyla
birlikte göndermeniz gerekmektedir. İade faturası, kargo payı dahil edilmeden
(ürün birim fiyatı + KDV) düzenlenmelidir. İade işleminin onaylanması
durumunda, iade başvurusundaki tercihiniz doğrultusunda 4 iş günü içinde
"ürün bedeli" tarafınıza geri ödenecektir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6.8.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Siparişini
verdiğiniz ürün yerine faturanızda yazan ve koliden çıkan ürün birbiri ile aynı
değilse ürününüzle ilgili yaşadığınız sorunları, ürünün elinize geçmesinden
itibaren 14 (on dört) gün içerisinde tarafımıza mail ile (online@talentosound.com)
başvurabilirsiniz. Ürün ve/veya Hizmet&nbsp;</span><span lang="TR"><a href="https://kidolog.com/"><span style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">talentosound.com</span></a></span><span class="MsoHyperlink"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:
&quot;Segoe UI&quot;;color:#007BFF">.tr</span></span><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;tarafından 14 iş günü içerisinde
incelenerek durumu analiz edilir ve yanlışlık var ise durumu düzelterek doğru
ürünün Alıcı’ya iletimini gerçekleştirilir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">7.
Ürünlerin Teslimi ve Teslim Şekli</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">7.1.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Sipariş
konusu ürünler, aksi Alıcı tarafından ayrıca yazılı olarak belirtilmediği
takdirde Alıcı’nın adresinde Alıcı’ya teslim edilecektir. Alıcı, "Teslimat
Bilgileri" ve "Alıcı" gibi siparişinin teslimatına dair verdiği
bilgilerin doğru ve güncel olduğunu, kabul, beyan ve taahhüt eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">7.2.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket
ile paylaşılan veriler, 6698 sayılı Kişisel Verilerin Korunması Kanunu (“KVKK”)
kapsamında işlenmektedir. Kişisel verilere ilişkin daha fazla bilgi edinmek
için lütfen web sitesinde yer alan&nbsp;Kişisel Verilerin İşlenmesine
İlişkin&nbsp;</span><span lang="TR"><a href="https://kidolog.com/sozlesmeler/aydinlatma-metni"><span style="font-family:
&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">Aydınlatma
Metni’ni</span></a></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">&nbsp;inceleyiniz. Alıcı, bilgilerinin kendisine ve kişisel
verilerinin, 6698 sayılı Kişisel Verilerin Korunması Kanunu ve ilgili mevzuat
kapsamında Veri Sorumlusu sıfatı ile Şirket tarafından işlenmesine&nbsp;</span><span lang="TR"><a href="https://kidolog.com/sozlesmeler/aydinlatma-metni"><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">Aydınlatma
Metni</span></a></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">&nbsp;kapsamında muvafakat vermiş olup bu verilerin işlendiğini
bilir ve kabul eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">7.3.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Kural
olarak teslimat masrafları Alıcı’ya aittir. Şirket, İnternet Sitesinde veya
Uygulama’da, sistemde işlemin gerçekleştiği süre zarfında ilan ettiği tutarın
üzerinde alışveriş yapanların teslimat ücretinin kendisince karşılanacağını ya
da kampanya dahilinde ücretsiz teslimat yapacağını beyan etmişse, teslimat
masrafı Şirket’e ait olacaktır. Bununla birlikte Şirket, teslimatın hangi
koşullarda kendisi tarafından karşılayacağını belirlemekte serbest olup
teslimat ücretine ilişkin herhangi bir taahhütte bulunmamaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">7.4.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Sipariş,
Alıcı’nın ödeme bilgisi hakkında Banka onay geldikten sonra verilmiş
sayılacaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">7.5.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Havale
veya EFT siparişlerinin işleme alınma tarihi, siparişin verildiği tarih değil,
sipariş toplam tutarının Şirket’in banka hesaplarına ulaştığının görüldüğü
tarihtir. Havale veya EFT yoluyla verilen, ancak 1 (bir) hafta içerisinde
ödemesi gerçekleştirilmeyen siparişler iptal edilmektedir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">8.
Ayıba Karşı Hükümler</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">8.1.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Danışan,
Şirket’in sunduğu altyapı ve Şirket aracılığı ile Ürün ve/veya Hizmetler’i
Danışmanlar’dan alır. Danışan’ın satın alma talebi, Ürün ve/veya Hizmet’e
ilişkin Şirket tarafından hazırlanan, Şirket ya da Şirket dışındaki
platformlarda belirtilen koşulları kabul ederek Danışman ile arasında bir
hizmet ve/veya satış akdinin Ürün’ü ve/veya Hizmet’i satın alma talebiyle
kurulduğu anlamına gelmektedir. Danışan, bu satın alma talebiyle ilgili Ürün’ü
ve/veya Hizmet’i satın almayı kabul ve taahhüt eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">8.2.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Alıcı,
sipariş etmiş olduğu ürünlerin teslimi sırasında ayıp kontrolü yapmakla
sorumludur. Teslimatı yapan taşıyıcıdan kaynaklı hasar dışında, paket açılmadan
fark edilebilecek nitelikte herhangi bir hasar, eziklik, ıslaklık gibi normal
olmayan bir durum varsa; Alıcı teslimat görevlisinden tutanak hazırlamasını
talep etmelidir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">8.3.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Alıcı,
teslim edilen ürünler içerisinde açıkça görülen ve/veya açıkça belli olmayan
(gizli) bir ayıp olması halinde durumu Şirket’e derhal ihbar etmekle
yükümlüdür. Aksi halde Alıcı, teslim edilen ürünü ayıplı hali ile kabul etmiş
sayılacaktır</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Aksi halde
Alıcı, 6098 Sayılı Türk Borçlar Kanunu’nu gereğince, teslim edilen ürünü ayıplı
hali ile kabul etmiş sayılacaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">8.4.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Alıcı,
ayıp ihbarı ile İnternet Sitesi üzerinden iade talebi oluşturarak, ürünü teslim
almış olduğu şekli ile tam ve eksiksiz olarak Şirket’e göndermekle yükümlüdür.
Alıcı’nın teslim edilen ürünü herhangi bir nedenle iade edebilmesi için; ürünün
orijinal ambalajında muhafaza edilmesi, tüm ambalaj malzemeleriyle eksiksiz bir
şekilde, fiziksel hasar görmeden aynen geri gönderilmesi gereklidir. Ayrıca,
irsaliye ve faturanın tüm asıl ve kopyalarının da ürünlerle birlikte
gönderilmesi gerekmektedir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">8.5.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket,
usulüne uygun olarak yapılan ihbar ve sonrasında ürünün kendisine teslimi ile
gerekli kontrolleri yaparak; Alıcı’nın beyanlarında haklı olması halinde ayıplı
ürünü değiştirerek Alıcı’ya tüm masrafları kendisince karşılanmak üzere teslim
eder. Alıcı, ücret iadesi talep etme hakkına sahiptir. Bu Alıcı’ya ücret iadesi
4 iş günü içinde yapılacaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">8.6.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;İade
edilen ayıplı ürünün yenisinin stoklarda kalmaması, yeniden üretim imkanının
olmaması, materyalin bulunamaması ya da benzeri zorlayıcı nedenler ile ayıpsız
ürün ile değiştirme imkânının ortadan kalktığı durumlarda, Şirket ürün bedelini
Alıcı’ya, herhangi bir faiz veya masraf ödemeksizin, tahsil edilen yöntemle
aynı şekilde iade edeceğini beyan ve taahhüt eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">8.7.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Ürün
iadesinde 213 sayılı Vergi Usul Kanunu ve ilgili mevzuat hükümleri saklı olup
Alıcı ve Şirket belirtilen hükümlere riayet etmekle yükümlüdür.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">8.8.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket,
çevrimiçi ya da çevrimdışı konumdaki hiçbir Danışman’ın davranışlarından
sorumlu değildir. Şirket’in, hiçbir koşulda Şirket’in kullanımı, Ziyaretçiler
arasındaki çevrimiçi veya çevrimdışı her türlü iletişim ve etkileşimden doğan
sonuçlardan kayıp, hasar, zarar, ölüm vs. dahi olsa sorumluluğu
bulunmamaktadır. Şirket’in, herhangi bir sebeple bu tür eylemler neticesinde
uğrayabileceği her tür zararın tazminini talep hakkı saklıdır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">9.
Fiyatlara İlişkin Hükümler</span></strong><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">9.1.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Alıcı
tarafından İnternet Sitesi’nden sipariş edilen ürünlerin bedeli İnternet
Sitesi’nde ve Alıcı’ya gönderilen fatura içeriğinde belirtilmiştir. İşbu
Sözleşmede belirtilmedikçe ürün bedeline KDV dahil değildir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">9.2.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Şirket,
Danışanlar’a sağlanan Hizmet karşılığında Danışmanlar’a verilecek Hizmet
Bedeli’nde ve/veya işbu aracılık hizmeti gereğince tahsis ettiği Hizmet
Bedeli’nde değişiklik yapabilir. Hizmet Bedeli’ne ilişkin değişiklikler,
değişikliğin ilan edildiği andan itibaren geçerlilik kazanacak ve herhangi bir
kampanyanın bulunması halinde, kampanyanın sona erme tarihine kadar geçerli
olacaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">9.3.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Alıcı’nın,
kredi kartı ile ve taksitle alışveriş yapması durumunda İnternet Sitesi’nden
seçmiş olduğu taksit biçimi geçerlidir. Taksitlendirme işlemlerinde, Alıcı ile
kart sahibi banka arasında akdedilen ve mutabakata varılan sözleşmenin ilgili
hükümleri geçerlidir. Kredi kartı ödeme tarihi, Banka ile Alıcı arasındaki
sözleşme hükümlerince belirlenmekte olup Şirket’in bu konuya ilişkin herhangi
bir yükümlülüğü bulunmamaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">10.
Mücbir Sebepler ve Umulmayan Haller</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">10.1.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Taraflar’ın
kontrolü dışında gelişen, Taraflar’ın kendisinden kaynaklanmayan ve Taraflar’ın
işbu Sözleşme ile yüklendiği yükümlülüklerini yerine getirmelerini engelleyici
ve/veya geciktirici nitelikte olan grev, lokavt, savaş, seferberlik halleri, halk
ayaklanmaları, saldırı, doğal afetler (deprem, sel baskını, çığ düşmesi vb.)
yangın ve ciddi bulaşıcı hastalıkların baş göstermesi ve benzeri durumlar
mücbir sebep olarak kabul edilecektir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">10.2.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">İşbu
Sözleşme’nin imzalandığı tarihte var olmayan ve öngörülemeyen, Taraflar’ın veya
tek bir Tarafın çalışma imkânlarını kısmen veya tamamen, geçici veya daimi
olarak durduracak şekilde ve derecede meydana gelen beşeri ve doğal afetler,
salgın hastalık, harp, seferberlik, yangın, grev, lokavt, telekomünikasyon
altyapısından kaynaklanan arızalar, elektrik kesintisi ve kötü hava koşulları
vb. haller ile Taraflar’ın kontrolü haricinde zuhur eden sair haller mücbir
sebep sayılır. Mücbir sebebe maruz kalan Taraf durumu derhal diğer Tarafa
yazılı olarak bildirir ve mücbir sebep süresi boyunca Taraflar’ın edimleri
askıya alınır. Mücbir sebepler ortadan kalkınca Sözleşme kaldığı yerden devam
eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">10.3.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Yukarıda
sayılan mücbir sebep hallerinden birinin meydana gelmesi durumunda Tarafların
işbu Sözleşmeden kaynaklanan yükümlülükleri askıya alınır. Mücbir sebep, 30
(otuz) gün süreyle devam ederse Taraflardan herhangi biri sözleşmeyi
tazminatsız olarak feshedebilir. Ancak Tarafların fesihten önce tahakkuk eden
hak ve alacakları saklı kalır ve iade edilmez.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">10.4.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Yukarıda
sayılan mücbir sebep hallerinden birinin meydana gelmesi durumunda Şirket, işbu
Sözleşme ile yüklenmiş olduğu edimleri tek taraflı olarak yerine getirmekten
ödenen bedelin iadesini yaparak tazminatsız olarak kaçınabilir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">12.
Delil Sözleşmesi</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">11.1.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Taraflar
arasında doğan/doğabilecek her türlü ihtilafta Talento Sound Eğitim ve
Danışmanlık Hizmetleri Ticaret Limited Şirketi’nin ticari defter, kayıt ve
belgeleri ile bilgisayar, faks kayıtlarının, mikrofilmlerinin, e-posta
yazışmalarının 6100 sayılı Hukuk Muhakemeleri Kanunu m. 193 uyarınca kesin
delil hükmünde olacağını Alıcı gayrikabili rücu kabul, beyan ve taahhüt eder.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">12.
Uygulanacak Hukuk ve Uyuşmazlıkların Çözümü</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">12.1.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;İşbu
Sözleşme Alıcı’nın ödeme yapmasından önce Taraflar arasında elektronik ortamda
düzenlenmiş ve onaylanmıştır; bu kapsamda, işbu Sözleşme Taraflar arasında
yazılı sözleşmenin yerine geçer ve 6100 sayılı Hukuk Muhakemeleri Kanunu
gereğince elektronik belge hükmündedir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">12.2.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;İşbu
Sözleşme’den doğan her türlü ihtilafın çözümünde Ankara Ceza Mahkemeleri ile
İcra Daireleri yetkili ve görevli olup her türlü ihtilafın çözümünde Türkiye
Cumhuriyeti hukuku uygulanacaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">13.
Cayma Hakkı</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">13.1.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Mesafeli
Sözleşmeler Yönetmeliği’nin "Cayma Hakkının İstisnaları" başlıklı 15.
Madde hükümleri ve Taraflar arasında elektronik ortamda onaylanan Mesafeli
Satış Sözleşmesinin 6. Madde hükümleri çerçevesinde kullanılmamış ve Şirket
tarafından tekrar satışa arz edilebilir nitelikte olması şarttır. Bununla
birlikte ilgili Yönetmelik gereğinde Alıcı “Tüketicinin İstekleri veya Kişisel
İhtiyaçları Doğrultusunda Hazırlanan Mallara İlişkin Sözleşmeler”de hakkını
kullanamayacaktır.<span style="background:yellow;mso-highlight:yellow"></span></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">13.2.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Alıcı, 6
haftalık TalentoSound programına başlamadıysa 14 (on dört) gün içinde herhangi
bir gerekçe göstermeksizin ve cezai şart ödemeksizin sözleşmeden cayma hakkına
sahiptir. Cayma hakkının süresi, hizmet ifasına ilişkin sözleşmelerde
sözleşmenin kurulduğu gün; mal teslimine ilişkin sözleşmelerde ise tüketicinin
veya tüketici tarafından belirlenen üçüncü kişinin malı teslim aldığı gün
başlar. Ancak tüketici, sözleşmenin kurulmasından malın teslimine kadar olan
süre içinde de cayma hakkını kullanabilecektir.</span></p>

<p class="MsoNormal"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">13.3.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Alıcı, işbu
Sözleşmeyi okuma ve onaylamasıyla;</span></p>

<p class="MsoNormal"><span lang="TR">Danışan 6 haftalık programa ve hizmet almaya
başladı ise bu sözleşmeyi iptal etmek istediğinde;</span></p>

<p class="MsoListParagraphCxSpFirst" style="margin-top:0in;margin-right:0in;
margin-bottom:8.0pt;margin-left:53.25pt;mso-add-space:auto;text-indent:-.25in;
line-height:106%;mso-list:l0 level1 lfo3"><span lang="TR" style="mso-ascii-font-family:Calibri;mso-fareast-font-family:Calibri;
mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri"><span style="mso-list:Ignore">-<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><span lang="TR">Öncelikle iptal talebini yazılı
olarak veya resmi mail adresi olan <a href="mailto:online@talentosound.com">online@talentosound.com</a>
adresine yazılı olarak Kurum’a bildirmek zorundadır. </span></p>

<p class="MsoListParagraphCxSpMiddle" style="margin-top:0in;margin-right:0in;
margin-bottom:8.0pt;margin-left:53.25pt;mso-add-space:auto;text-indent:-.25in;
line-height:106%;mso-list:l0 level1 lfo3"><span lang="TR" style="mso-ascii-font-family:Calibri;mso-fareast-font-family:Calibri;
mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri"><span style="mso-list:Ignore">-<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><span lang="TR">Seanslar başlamadan yapılacak
iptal talebinde Danışan, ön görüşme, psikolojik danışmanlık bedeli olarak
kuruma 400 TL ve haftalık destek seanslarının her biri için 400 TL ödemek
zorundadır. Ayrıca uygulamaların öncesinde yapılan tanılama ve program
oluşturma testleri yapıldıysa her bir test için 400 TL, sisteme yüklenen
dinletilerin her biri için 400 TL ödemekle yükümlüdür.</span></p>

<p class="MsoListParagraphCxSpLast" style="margin-top:0in;margin-right:0in;
margin-bottom:8.0pt;margin-left:53.25pt;mso-add-space:auto;text-align:justify;
text-indent:-.25in;line-height:106%;mso-list:l0 level1 lfo3"><span lang="TR" style="mso-ascii-font-family:Calibri;mso-fareast-font-family:Calibri;
mso-hansi-font-family:Calibri;mso-bidi-font-family:Calibri"><span style="mso-list:Ignore">-<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><span lang="TR">Danışanın iptal talebi halinde
ödemek zorunda olduğu bedel sözleşmenin toplam bedelini geçemez. </span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">14.
Yürürlük</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">14.1.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Site
üzerinden verilen siparişe ait ödemenin gerçekleşmesi durumunda Alıcı işbu
Sözleşme’nin tüm koşullarını kabul etmiş sayılacaktır. Şirket, söz konusu
Sözleşme’nin site üzerinde, Alıcı tarafından okunduğuna ve kabul edildiğine
dair onay almaksızın sipariş verilememesini sağlayacak yazılımsal düzenlemeleri
yapmakla yükümlüdür.</span></p>

<p class="MsoNormal"><b style="mso-bidi-font-weight:normal"><span lang="TR">&nbsp;</span></b></p>

<p class="MsoNormal"><b style="mso-bidi-font-weight:normal"><span lang="TR">&nbsp;</span></b></p>

<p class="MsoNormal"><b style="mso-bidi-font-weight:normal"><span lang="TR">TALENTO
SOUND SÖZLEŞME KOŞULLARI</span></b></p>

<p class="MsoNormal" style="text-align:justify"><b style="mso-bidi-font-weight:
normal"><span lang="TR">Madde 1-</span></b><span lang="TR"> Bu Sözleşme <b style="mso-bidi-font-weight:normal">Talento Psikolojik Danışmanlık ve
Değerlendirme Merkezi (Kurum) </b>ile
……………………..……................................. <b>(Danışan)</b> arasında
Danışanın alacağı <b style="mso-bidi-font-weight:normal">TalentoSound</b>
modülünün içerik ve ödeme şartlarını belirlemek için imzalanmıştır.</span></p>

<p class="MsoNormal" style="text-align:justify"><b style="mso-bidi-font-weight:
normal"><span lang="TR">Madde 2-</span></b><span lang="TR"> Sözleşme ile Kurum
satın alınan eğitimin ön testini yapmayı, toplam 42 saat dinleti yapmayı ve
gerekirse son testini de yaparak danışana bildirmeyi, 6 haftalık TalentoSound modül
sürecinde danışana haftalık destek seansları vermeye, danışan ise sözleşme
bedelini eksiksiz ve zamanında ödemeyi kabul ve taahhüt eder. </span></p>

<p class="MsoNormal" style="text-align:justify"><b style="mso-bidi-font-weight:
normal"><span lang="TR">Madde 3-</span></b><span lang="TR"> Uygulama Kurumun uygun
gördüğü tarihte başlayacak ve danışan kurumun tavsiye ettiği uygulama
seanslarına katılımını sağlayacaktır. Programın aksaması eğitimin sonucuna
doğrudan etki edeceği için belirlenen günlerde TalentoSound seanslarına katılım
ve haftalık destek seanslarına katılım danışanın asli sorumluluklarındandır ve
telafisi yoktur.</span></p>

<p class="MsoNormal" style="text-align:justify"><b style="mso-bidi-font-weight:
normal"><span lang="TR">Madde 4-</span></b><span lang="TR"> Programın bedeli ödeme
planında belirtilmiştir. Bu bedel programın tamamının alınması halinde oluşan
peşin fiyattır. Danışan programın bir kısmını alması, ya da programı
tamamlamadan yarıda bırakması durumunda bu sözleşmenin 5. Maddesindeki şartlara
göre ödeme yapmayı kabul ve taahhüt eder. TalentoSound modülü için verilen
kulaklığı modül bitiminde teslim edeceğini taahhüt eder. 6 hafta içinde dinletiler
dinlenmediği, kurallara uyulmadığı tespit edilir ise danışan sözleşme bedelinin
tamamını ödemek zorundadır. Ayrıca 6 haftalık program sonunda kulaklık kuruma
14 gün içinde teslim edilmez ise alınan 1.000 TL’lik depozitoyu kulaklık satış
bedeli olarak şirket alır.</span></p>',
               ],
               [
                    'user_id' => $superAdmin->user_id,
                    'title' => 'KVKK Politikası',
                    'slug' => Str::slug('KVKK Politikası'),
                    'content' => '<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
w\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:OfficeDocumentSettings>
  <o:RelyOnVML/>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:View>Normal</w:View>
  <w:Zoom>0</w:Zoom>
  <w:TrackMoves>false</w:TrackMoves>
  <w:TrackFormatting/>
  <w:PunctuationKerning/>
  <w:ValidateAgainstSchemas/>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:DoNotPromoteQF/>
  <w:LidThemeOther>TR</w:LidThemeOther>
  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
  <w:Compatibility>
   <w:BreakWrappedTables/>
   <w:SnapToGridInCell/>
   <w:WrapTextWithPunct/>
   <w:UseAsianBreakRules/>
   <w:DontGrowAutofit/>
   <w:SplitPgBreakAndParaMark/>
   <w:EnableOpenTypeKerning/>
   <w:DontFlipMirrorIndents/>
   <w:OverrideTableStyleHps/>
  </w:Compatibility>
  <m:mathPr>
   <m:mathFont m:val="Cambria Math"/>
   <m:brkBin m:val="before"/>
   <m:brkBinSub m:val="&#45;-"/>
   <m:smallFrac m:val="off"/>
   <m:dispDef/>
   <m:lMargin m:val="0"/>
   <m:rMargin m:val="0"/>
   <m:defJc m:val="centerGroup"/>
   <m:wrapIndent m:val="1440"/>
   <m:intLim m:val="subSup"/>
   <m:naryLim m:val="undOvr"/>
  </m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
  DefSemiHidden="false" DefQFormat="false" DefPriority="99"
  LatentStyleCount="376">
  <w:LsdException Locked="false" Priority="0" QFormat="true" Name="Normal"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 1"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 2"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 3"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 9"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 1"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 2"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 3"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 4"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 5"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 6"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 7"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 8"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="header"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footer"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index heading"/>
  <w:LsdException Locked="false" Priority="35" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="caption"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of figures"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope return"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="line number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="page number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of authorities"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="macro"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toa heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 5"/>
  <w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Closing"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Signature"/>
  <w:LsdException Locked="false" Priority="1" SemiHidden="true"
   UnhideWhenUsed="true" Name="Default Paragraph Font"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Message Header"/>
  <w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Salutation"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Date"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Note Heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Block Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Hyperlink"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="FollowedHyperlink"/>
  <w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>
  <w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Document Map"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Plain Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="E-mail Signature"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Top of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Bottom of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal (Web)"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Acronym"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Cite"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Code"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Definition"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Keyboard"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Preformatted"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Sample"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Typewriter"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Variable"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Table"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation subject"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="No List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Contemporary"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Elegant"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Professional"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Balloon Text"/>
  <w:LsdException Locked="false" Priority="39" Name="Table Grid"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Theme"/>
  <w:LsdException Locked="false" SemiHidden="true" Name="Placeholder Text"/>
  <w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>
  <w:LsdException Locked="false" SemiHidden="true" Name="Revision"/>
  <w:LsdException Locked="false" Priority="34" QFormat="true"
   Name="List Paragraph"/>
  <w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
  <w:LsdException Locked="false" Priority="30" QFormat="true"
   Name="Intense Quote"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="19" QFormat="true"
   Name="Subtle Emphasis"/>
  <w:LsdException Locked="false" Priority="21" QFormat="true"
   Name="Intense Emphasis"/>
  <w:LsdException Locked="false" Priority="31" QFormat="true"
   Name="Subtle Reference"/>
  <w:LsdException Locked="false" Priority="32" QFormat="true"
   Name="Intense Reference"/>
  <w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
  <w:LsdException Locked="false" Priority="37" SemiHidden="true"
   UnhideWhenUsed="true" Name="Bibliography"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
  <w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
  <w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
  <w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
  <w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
  <w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
  <w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
  <w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Mention"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Smart Hyperlink"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Hashtag"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Unresolved Mention"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Smart Link"/>
 </w:LatentStyles>
</xml><![endif]--><!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Table Normal";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-parent:"";
	mso-padding-alt:0in 5.4pt 0in 5.4pt;
	mso-para-margin:0in;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-ansi-language:TR;}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="1028"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->

<h2 style="margin-top:0in;text-align:justify;mso-collapsed-heading:yes"><strong><span lang="TR" style="font-size:12.0pt;font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:
&quot;Times New Roman&quot;;mso-bidi-theme-font:major-bidi;color:#030349">Talento Sound
Eğitim ve Danışmanlık Hizmetleri Ticaret Limited Şirketi </span></strong><span lang="TR" style="font-size:12.0pt;font-family:Roboto;color:#030349"></span></h2>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">KİŞİSEL
VERİLERİN KORUNMASI VE İŞLENMESİ POLİTİKASI</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"><br></span></p><p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Politika Yürürlük
Tarihi</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">01.01.2024</span></p><p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-size:12.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">İşbu
belge&nbsp;</span><strong><span lang="TR" style="font-size:12.0pt;font-family:
&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Times New Roman&quot;;mso-bidi-theme-font:
major-bidi;color:#030349">Talento Sound Eğitim ve Danışmanlık Hizmetleri
Ticaret Limited Şirketi </span></strong><span lang="TR" style="font-size:12.0pt;
font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">’nin yazılı izni olmaksızın
çoğaltılıp dağıtılamaz.</span><span lang="TR" style="font-size:12.0pt;font-family:
Roboto;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">İçindekiler</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">BÖLÜM 1: GİRİŞ. 4</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">1.1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
GİRİŞ. 4</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">1.2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
POLİTİKANIN AMACI VE KAPSAMI 4</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">1.3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
MEVZUATIN UYGULANMASI 4</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">BÖLÜM 2: KİŞİSEL
VERİLERİN İŞLENMESİNE İLİŞKİN HUSUSLAR. 5</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">2.1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
KİŞİSEL VERİLERİN İŞLENMESİNDE GENEL İLKELER. 5</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">2.1.1.&nbsp; Hukuka ve
Dürüstlük Kurallarına Uygun Olması 5</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">2.1.2.&nbsp; Doğru ve
Gerektiğinde Güncel Olması 5</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">2.1.3.&nbsp; Belirli,
Açık ve Meşru Amaçlar İçin İşlenmesi 5</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">2.1.4.&nbsp;
İşlendikleri Amaçla Bağlantılı, Sınırlı ve Ölçülü Olma. 5</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">2.1.5.&nbsp; İlgili
Mevzuatta Öngörülen veya İşlendikleri Amaç İçin Gerekli Olan Süre Kadar
Muhafaza Edilme 5</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">2.2.&nbsp;&nbsp;&nbsp;&nbsp;
KİŞİSEL VERİLERİN İŞLENME ŞARTLARI 6</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">2.2.1.&nbsp; Kişisel
Verilerin İşlenme Şartları 6</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">BÖLÜM 3: KİŞİSEL
VERİLERİN KORUNMASI 7</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">3.1.&nbsp;&nbsp;&nbsp;&nbsp;
KİŞİSEL VERİLERİN GÜVENLİĞİ 7</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">3.1.1.&nbsp; Verilerin
Hukuka Uygun İşlenmesini Sağlamak İçin Alınan Tedbirler 8</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">3.1.2.&nbsp; Hukuka
Aykırı Erişimini Engellemek İçin Alınan Tedbirler 8</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">3.1.3.&nbsp; Kişisel
Verilerin Güvenli Ortamlarda Saklanması Konusunda Alınan Tedbirler 9</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">3.2.&nbsp;&nbsp;&nbsp;&nbsp;
DENETİM.. 10</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">3.2.1.&nbsp; Kişisel
Verilerin Korunmasında Alınacak Tedbirlerin Denetimi 10</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">3.2.2.&nbsp; İş
Birimlerinin Kişisel Verilerinin Korunması ve İşlenmesi Konusunda
Farkındalıklarının Artırılmasının Denetimi 10</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">3.3.&nbsp;&nbsp;&nbsp;&nbsp;
GİZLİLİK. 10</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">3.4.&nbsp;&nbsp;&nbsp;&nbsp;
KİŞİSEL VERİLERİN YETKİSİZ İFŞASI 11</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">BÖLÜM 4: ŞİRKET KİŞİSEL
VERİLERİN KORUNMASINA YÖNELİK ORGANİZASYONEL TEDBİRLER. 12</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">BÖLÜM 5: KİŞİSEL
VERİLERİN AKTARILDIĞI ÜÇÜNCÜ KİŞİLER VE AKTARILMA AMAÇLARI 13</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">BÖLÜM 6: KİŞİSEL
VERİLERİN SİLİNMESİ, SAKLAMA SÜRELERİ ve VERİ ENVANTERİ 14</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">6.1.&nbsp;&nbsp;&nbsp;&nbsp;
ŞİRKETİMİZİN YÜKÜMLÜLÜĞÜ. 14</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">6.2.&nbsp;&nbsp;&nbsp;&nbsp;
KİŞİSEL VERİLERİN SİLİNMESİ, SAKLAMA SÜRELERİ VE VERİ ENVANTERİ 15</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">6.2.1.&nbsp; Kişisel
Verilerin Silinmesi ve Yok Edilmesi 15</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">6.2.2.&nbsp; Kişisel
Verilerin Silinme Yöntemleri 15</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">6.2.3.&nbsp; Kişisel
Verilerin Yok Edilmesi Yöntemleri 16</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">6.2.4.&nbsp; Kişisel
Verilerin Anonim Hale Getirilmesi 16</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">6.2.4.1.. Kişisel
Verilerin Anonim Hale Getirilme Yöntemleri 16</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">6.2.4.2.. Şirketimizin
Anonim Hale Getirme Yöntemini Seçme Usulü. 18</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">6.3.&nbsp;&nbsp;&nbsp;&nbsp;
SAKLAMA SÜRELERİ 18</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">6.4.&nbsp;&nbsp;&nbsp;&nbsp;
KİŞİSEL VERİ ENVANTERİ 19</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">6.4.1.&nbsp; Kişisel
Veri Envanterinin Hazırlanışı 20</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">BÖLÜM 7: VERİ SAHİBİNİN
HAKLARI VE BU HAKLARIN KULLANILMASINA İLİŞKİN KURALLAR. 20</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">7.1.&nbsp;&nbsp;&nbsp;&nbsp;
KİŞİSEL VERİ SAHİBİNİN HAKLARI 20</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">7.1.1.&nbsp; Kişisel
Verilere Erişim Hakkı 21</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">7.1.2.&nbsp; Kişisel
Verilerini Değiştirme veya Sildirme Hakkı 21</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">7.1.3.&nbsp; Kişisel
Verilerin Güncelliğinin Sağlanması 22</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">7.2.&nbsp;&nbsp;&nbsp;&nbsp;
VERİ SAHİBİNİN HAKLARININ GÖZETİLMESİ 22</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">7.3.&nbsp;&nbsp;&nbsp;&nbsp;
KİŞİSEL VERİ SAHİBİNİN HAKLARINI İLERİ SÜREMEYECEĞİ HALLER. 23</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">BÖLÜM 8: ÇALIŞAN
ADAYLARININ KİŞİSEL VERİLERİNİN İŞLENMESİ 24</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">BÖLÜM 9: ŞİRKET
TESİSLERİ İÇERİSİNDE YAPILAN KİŞİSEL VERİ İŞLEME FAALİYETLERİ İLE İNTERNET
SİTESİ ÜZERİNDEN YAPILAN VERİ İŞLEME FAALİYETLERİ BİNA, TESİS GİRİŞLERİ İLE
BİNA TESİS İÇERİSİNDE YAPILAN KİŞİSEL VERİ İŞLEME FAALİYETLERİ 25</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">9.1. ŞİRKETİN BİNA,
TESİS GİRİŞLERİNDE VE İÇERİSİNDE YÜRÜTÜLEN KAMERA İLE İZLEME FAALİYETİ 25</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">9.2. ŞİRKETİN BİNA,
TESİS GİRİŞLERİNDE VE İÇERİSİNDE YÜRÜTÜLEN MİSAFİR GİRİŞ ÇIKIŞLARININ TAKİBİ 27</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">9.3. ŞİRKETİN
MİSAFİRLERİNE SAĞLANAN İNTERNET ERİŞİMLERİNE İLİŞKİN KAYITLARIN SAKLANMASI VE
İNTERNET SİTESİ ZİYARETÇİLERİ 28</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">9.4. ŞİRKETİN İNTERNET
SİTESİ ZİYARETÇİLERİ 28</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">BÖLÜM 10: YÜRÜRLÜK VE
GÜNCELLENEBİLİK. 28</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">EK-1: TANIMLAR. 29</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">EK-2 : KISALTMALAR. 30</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<h2 style="text-align:justify;mso-collapsed-heading:yes"><b><span lang="TR" style="font-size:12.0pt;font-family:Roboto;color:#030349">BÖLÜM 1: GİRİŞ</span></b><span lang="TR" style="font-size:12.0pt;font-family:Roboto;mso-bidi-font-family:&quot;Times New Roman&quot;;
color:#030349"></span></h2>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l24 level1 lfo1;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l24 level2 lfo1;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">GİRİŞ</span></li></ol></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel Verilerin
Korunması Kanunu ile verileri işlenen kişilerin verilerinin korunması konusu
her şirket açısından temel bir zaruret haline gelmiştir. Bu sebeple özellikle
kişilerin özel hayatına ve bilgilerine erişim hususunda azami ihtimam göstermek
ve bu konuda etkili ve caydırıcı önlemler almak ek olarak bütün bu işlemler
esnasında müşterilerimize, potansiyel müşterilerimize, ziyaretçilerimize,
şirket yetkililerimize, işbirliği içinde olduğumuz taraf ve kurumların tamamına
kısaca şirketimizle doğrudan veya dolaylı olarak bağlantılı olan verilerini
işlediğimiz her bir kişiye şeffaf olmak şirket veri politikamızın temel
hedefini oluşturmaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirketimiz Talento
Sound Eğitim ve Danışmanlık Hizmetleri Ticaret Limited Şirketi işbu Politika
ile kişisel verilerin işlenmesine yönelik kurallarımızı şeffaflık ve açıklık
ilkeleri çerçevesinde belirlemekte ve hayata geçirmektedir.</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l55 level1 lfo2;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l55 level2 lfo2;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">POLİTİKANIN AMACI VE KAPSAMI</span></li></ol></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Bu politikanın temel
amacı kişisel verilerin işlenmesinde başta özel hayatın gizliliği olmak üzere
verileri işlenmiş olan kişilerin temel hak ve özgürlüklerini korumak ve bu
anlamda Şirketimizin yaptığı her faaliyetin kamunun aydınlatılması yoluyla
şeffaflığının sağlanmasıdır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Bu politika
hükümlerinin kapsamı doğrudan veya dolaylı olarak verilerini işlediğimiz
kişilerin bütün kişisel verileridir.</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l47 level1 lfo3;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l47 level2 lfo3;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">MEVZUATIN UYGULANMASI</span></li></ol></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Yürürlükte bulunan
mevzuat ve politikamız arasında uyumsuzluk bulunması halinde yürürlükte olan
mevzuat öncelikli olarak uygulanacak olup bu temel politikanın dışında daha
özel amaçlar için aynı konuda oluşturulan başka politika veya düzenleme
bulunması halinde öncelikle özel hükümler içeren maddeler uygulanır. Diğer
politika ve dokümanların bu politika ve ilgili mevzuat ile çelişen hükümleri
uygulanmaz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<h2 style="text-align:justify;mso-collapsed-heading:yes"><b><span lang="TR" style="font-size:12.0pt;font-family:Roboto;color:#030349">BÖLÜM 2: KİŞİSEL
VERİLERİN İŞLENMESİNE İLİŞKİN HUSUSLAR</span></b><span lang="TR" style="font-size:12.0pt;font-family:Roboto;mso-bidi-font-family:&quot;Times New Roman&quot;;
color:#030349"></span></h2>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l12 level1 lfo4;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l12 level2 lfo4;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">KİŞİSEL VERİLERİN İŞLENMESİNDE GENEL
      İLKELER</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l12 level3 lfo4;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Hukuka ve Dürüstlük Kurallarına Uygun
       Olması</span></li></ol></ol></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişilerin verileri
işlenirken işlenme sürecinde veriler hukuka ve dürüstlük kurallarına uygun
olarak elde edilmeli ve işlenmelidir. Şirketimiz (Talento Sound Eğitim ve
Danışmanlık Hizmetleri Ticaret Limited Şirketi) verileri işlerken hukuka ve
dürüstlük kurallarına uygun bir şekilde azami hassasiyet ve kontrol ile
verileri işlemektedir.</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l23 level1 lfo5;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l23 level2 lfo5;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l23 level3 lfo5;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Doğru ve Gerektiğinde Güncel Olması</span></li></ol></ol></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">İşlenen verilerin doğru
olması ve şahısların verileri hakkında güncellik gerektiğinde güncel olması
gerekmektedir. Şirketimiz işlenen verilerin doğruluğunu her işleme seviyesinde
kontrol etmekte ve gerektiğinde güncel olması için gerekli hazırlıkları
yapmaktadır.</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l0 level1 lfo6;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l0 level2 lfo6;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l0 level3 lfo6;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Belirli, Açık ve Meşru Amaçlar İçin
       İşlenmesi</span></li></ol></ol></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Verilerin işlenmesi
esnasında hangi verilerin işlendiği belli ne kadarlık bir kısmının işlendiği
açık ve ne amaçla işlendiği belli, hukuka uygun yani meşru olmalıdır.
Şirketimiz sadece meşru amaçlar için verileri işlemekte bu işleme sırasında
elde edilecek olan verilerin belirli olmasına özen göstermektedir. Şirketimiz
elde edilen bilgilerin farklı amaçlar için kullanılmaması ve yanlış anlaşılmaya
sebebiyet &nbsp;&nbsp;&nbsp;vermemesi &nbsp;&nbsp;adına &nbsp;&nbsp;net, açık
&nbsp;bir &nbsp;şekilde &nbsp;verileri işlemektedir.</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l18 level1 lfo7;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l18 level2 lfo7;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l18 level3 lfo7;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">İşlendikleri Amaçla Bağlantılı, Sınırlı
       ve Ölçülü Olma</span></li></ol></ol></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Verilerin işlenme
amacına sadık, amaçla bağlantılı o amaçla sınırlı ve ölçülü bir şekilde
kontrollü bir şekilde işlenmesi gerekir. Şirketimiz veri işlerken yalnızca
işlendikleri amaçla bağlı ve sınırlı olmak&nbsp;üzere&nbsp;ölçülü bir şekilde
veri sahiplerinin verilerini işlemektedir.</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l53 level1 lfo8;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l53 level2 lfo8;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l53 level3 lfo8;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">İlgili Mevzuatta Öngörülen veya
       İşlendikleri Amaç İçin Gerekli Olan Süre Kadar Muhafaza Edilme</span></li></ol></ol></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">İşlenen kişisel veriler
ilgili mevzuattaki süreye veya ilgili amaçta belirtilen süreye uygun olarak
azami koruma kastıyla hareket edilmesi gerekir. Bu kapsamda, şirketimiz
öncelikle ilgili mevzuatta kişisel verilerin saklanması için bir süre
öngörülmüşse, bu süreler ile sınırlı olarak kişisel verileri muhafaza
etmektedir. Mevzuatta bir süre belirlenmemişse veya verilerin daha uzun süre
tutulmasını gerektiren hukuki bir sebep bulunmuyorsa, şirketimiz kişisel
verileri işlendikleri amaç için gerekli olan süre kadar saklamaktadır. Böylece
veri sahiplerinin güvenlikleri azami seviyede sağlanmaktadır.&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">(Ayrıntılı bilgi için bknz. Bölüm 6.4’e)</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;İşbu
politika ve ilgili bütün mevzuat hükümlerine uygun olarak veri işleyen sıfatını
taşıyan çalışanlarımız kişisel verilerle ilgili sınırsız süreli sır saklama
yükümlülüğü altındadır.</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l13 level1 lfo9;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l13 level2 lfo9;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">KİŞİSEL VERİLERİN İŞLENME ŞARTLARI</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l13 level3 lfo9;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel Verilerin İşlenme Şartları</span></li></ol></ol></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirketimiz veri
sahiplerinin verilerini kanuna ve hukuka uygun bir biçimde aşağıda yer alan
ilgili mevzuatın şartlarına uygun bir biçimde işlemektedir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Genel Kişisel Verilerin
İşlenme Şartları</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Genel Nitelikli Veri
Kavramı: Bu bölümde belirtilen özel nitelikli veri kategorisine girmeyen
şirketimiz tarafından işlenen her türlü kişisel veri kavramı genel nitelikli
kişisel veri kategorisini oluşturmaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Genel Şart: Kişisel
veriler ilgili kişinin açık rızası olmaksızın işlenemez.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">İstisnalar: Aşağıdaki
şartlardan birinin varlığı hâlinde, ilgili kişinin açık rızası aranmaksızın
kişisel verilerinin işlenmesi mümkündür:</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l2 level1 lfo10;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;Kanunlarda açıkça öngörülmesi.</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l2 level1 lfo10;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;Fiili imkânsızlık nedeniyle
     rızasını açıklayamayacak durumda bulunan veya rızasına hukuki geçerlilik
     tanınmayan kişinin kendisinin ya da bir başkasının hayatı veya beden
     bütünlüğünün korunması için zorunlu olması.</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l2 level1 lfo10;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;Bir sözleşmenin kurulması veya
     ifasıyla doğrudan doğruya ilgili olması kaydıyla, sözleşmenin taraflarına
     ait kişisel verilerin işlenmesinin gerekli olması.</span></li></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;ç) Veri
sorumlusunun hukuki yükümlülüğünü yerine getirebilmesi için zorunlu olması.</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l6 level1 lfo11;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;İlgili kişinin kendisi tarafından
     alenileştirilmiş olması.</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l6 level1 lfo11;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;Bir hakkın tesisi, kullanılması
     veya korunması için veri işlemenin zorunlu olması.</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l6 level1 lfo11;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;İlgili kişinin temel hak ve
     özgürlüklerine zarar vermemek kaydıyla, veri sorumlusunun meşru
     menfaatleri için veri işlenmesinin zorunlu olması.</span></li></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Özel nitelikli
kişisel verilerin işlenme şartları</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Özel
Nitelikli Veri Kavramı:&nbsp;</span></strong><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişilerin ırkı, etnik kökeni, siyasi
düşüncesi, felsefi inancı, dini, mezhebi veya diğer inançları, kılık ve
kıyafeti, dernek, vakıf ya da sendika üyeliği, sağlığı, cinsel hayatı, ceza
mahkûmiyeti ve güvenlik tedbirleriyle ilgili verileri ile biyometrik ve genetik
verileri özel nitelikli kişisel veridir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Genel
Şart:&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">Özel nitelikli kişisel verilerin, ilgilinin açık rızası
olmaksızın işlenmesi yasaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">İstisnalar
ve Özel Durumlar:&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">Birinci fıkrada sayılan sağlık ve cinsel hayat dışındaki kişisel
veriler, kanunlarda öngörülen hâllerde ilgili kişinin açık rızası aranmaksızın
işlenebilir.</span></p>



<ul style="margin-top:0in" type="disc"><ul style="margin-top:0in" type="circle"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l46 level2 lfo12;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">Şirketimiz özel sağlık problemlerinin
      kayıtlarının tutulması hususunda özel nitelikli verileri işleyip,
      saklarken ilgili veri sahiplerinin açık rızalarını almaktadır.</span></li></ul></ul>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Sağlık ve cinsel
hayata ilişkin kişisel veriler ise ancak kamu sağlığının korunması, koruyucu
hekimlik, tıbbî teşhis, tedavi ve bakım hizmetlerinin yürütülmesi, sağlık
hizmetleri ile finansmanının planlanması ve yönetimi amacıyla, sır saklama
yükümlülüğü altında bulunan&nbsp;kişiler veya yetkili kurum ve kuruluşlar
tarafından ilgilinin açık rızası aranmaksızın işlenebilir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Kişisel
Verileri Koruma Kurumu Kurulu Şartları:&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Özel nitelikli kişisel
verilerin işlenmesinde, ayrıca Kurul tarafından belirlenen yeterli önlemlerin
alınması şarttır.</span></p>

<h2 style="text-align:justify;mso-collapsed-heading:yes"><b><span lang="TR" style="font-size:12.0pt;font-family:Roboto;color:#030349">BÖLÜM 3: KİŞİSEL
VERİLERİN KORUNMASI</span></b><span lang="TR" style="font-size:12.0pt;font-family:
Roboto;mso-bidi-font-family:&quot;Times New Roman&quot;;color:#030349"></span></h2>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l9 level1 lfo13;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l9 level2 lfo13;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">KİŞİSEL VERİLERİN GÜVENLİĞİ</span></li></ol></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirketimiz&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">(</span></strong><b><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">Talento Sound Eğitim ve Danışmanlık Hizmetleri Ticaret Limited
Şirketi</span></b><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">)</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;Kişisel Verilerin
Korunması Kanunu’nun 12. maddesi[1] gereğince, kişisel verilerin hukuka uygun
işlenmesini sağlamak için, teknolojik imkânlar ve uygulama maliyetine göre her
türlü teknik ve idari tedbirler alınmaktadır. Veri sorumluları ile veri işleyen
kişilerin öğrendikleri kişisel veriler, bu kanun hükümlerine aykırı olarak
başkalarına açıklanamaz ve işleme amacı dışında kullanılamaz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Teknik konularla ilgili
şirket personeline gerekli eğitim verilmiştir; bu konuda çalışanların
farkındalığı yaratılmakta ve denetimler yürütülmektedir. Böylece şirket
bünyesinde bilgili personel istihdamı sağlanmıştır. Şirketimizin ilgili
departmanı ve anlaşmalı hukuki danışmanlık şirketimiz bu konuda koordine
halinde çalışmaktadır.</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l34 level1 lfo14;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l34 level2 lfo14;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l34 level3 lfo14;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Verilerin Hukuka Uygun İşlenmesini
       Sağlamak İçin Alınan Tedbirler</span></li></ol></ol></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirketimizce kişisel
verilerin hukuka uygun işlenmesini sağlamak için alınan başlıca teknik ve idari
tedbirler:</span></p>

<ul style="margin-top:0in" type="disc"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l39 level1 lfo15;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Şirketimiz bünyesinde gerçekleştirilen
     kişisel veri işleme faaliyetleri teknik sistemlerle denetlenmekte ve
     ilgili kişilere raporlandırılmaktadırlar.</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l39 level1 lfo15;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Şirketimizin iş birimlerinin yürütmüş
     olduğu kişisel veri işleme faaliyetleri; bu faaliyetlerin 6698 Sayılı
     Kanun’un aradığı kişisel veri işleme şartlarına uygunluğun sağlanması için
     yerine getirilecek olan gereklilikler her bir departman ve ilgili birimin
     yürütmüş olduğu faaliyet özelinde belirlenmektedir.</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l39 level1 lfo15;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Hukuka uygunluğun sağlanması ve ilgili
     departmanlar için hazırlanan prosedüre uyulması devamlılığı ve denetimi
     idari tedbirler, şirket içi politikalar ve eğitimler yoluyla hayata
     geçirilmektedir.</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l39 level2 lfo15;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l39 level3 lfo15;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Hukuka Aykırı Erişimini Engellemek İçin
       Alınan Tedbirler</span></li></ol></ol></ul>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirketimiz, kişisel
verilerin tedbirsizlikle veya yetkisiz olarak açıklanmasını, erişimini,
aktarılmasını veya başka şekillerdeki tüm hukuka aykırı erişimi önlemek için
korunacak verinin niteliğine göre teknik ve idari tedbirler almaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirketimizce kişisel
verilerin hukuka aykırı erişimini engellemek için alınan başlıca teknik ve
idari tedbirler:</span></p>

<ul style="margin-top:0in" type="disc"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l5 level1 lfo16;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Erişim ve yetkilendirme teknik çözümleri
     ile alınan teknik önlemler periyodik olarak raporlanmakta, risk teşkil
     eden hususlar yeniden değerlendirilerek gerekli teknolojik çözüm
     üretilmektedir. Loglama, virüs koruma sistemleri ve güvenlik duvarlarını
     içeren yazılımlar ve donanımlar kurulmaktadır.</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l5 level1 lfo16;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Teknik konularda bilgili personel
     istihdam edilmektedir.</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l5 level1 lfo16;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">İş birimi bazlı hukuksal uyum
     gerekliliklerine uygun olarak şirket içinde kişisel verilere erişim ve
     yetkilendirme süreçleri tasarlanmakta ve uygulanmaktadır.</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l5 level1 lfo16;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Çalışanlar, öğrendikleri kişisel
     verileri, Kişisel Verileri Koruma Kanunu hükümlerine ve sair ilgili tüm
     mevzuata aykırı olarak başkasına açıklayamayacağı ve işleme amacı dışında
     kullanamayacağı ve bu yükümlülüğün görevden ayrılmalarından sonra da devam
     edeceği konusunda bilgilendirilmekte ve bu doğrultuda kendilerinden
     gerekli taahhütler alınmaktadır.</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l5 level1 lfo16;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Şirketimiz tarafından kişisel verilerin
     hukuka uygun olarak aktarıldığı kişiler ile akdedilen sözleşmelere;
     kişisel verilerin aktarıldığı kişilerin, kişisel verilerin korunması
     amacıyla gerekli güvenlik tedbirlerini alacağına ilişkin hükümleri
     eklenmekte ve/veya karşılıklı mutabakat metinleri imzalanmaktadır.</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l5 level2 lfo16;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l5 level3 lfo16;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel Verilerin Güvenli Ortamlarda
       Saklanması Konusunda Alınan Tedbirler</span></li></ol></ol></ul>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirketimiz, kişisel
verilerin güvenli ortamlarda saklanması ve hukuka aykırı amaçlarla yok
edilmesini, kaybolmasını veya değiştirilmesini önlemek için gerekli teknik ve
idari tedbirleri almaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirketimizce kişisel
verilerin güvenli ortamlarda saklanması için alınan başlıca teknik ve idari
tedbirler:</span></p>

<ul style="margin-top:0in" type="disc"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l28 level1 lfo17;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel verilerin güvenli ortamlarda
     saklanması için teknolojik gelişmelere uygun sistemler kullanılmaktadır.</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l28 level1 lfo17;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Teknik konularda uzman personel istihdam edilmektedir.</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l28 level1 lfo17;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Saklanma alanlarına yönelik teknik
     güvenlik sistemleri kurulmakta, alınan teknik önlemler ilgilisine
     raporlanmakta, risk teşkil eden hususlar yeniden değerlendirilerek gerekli
     teknolojik çözüm üretilmektedir.</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l28 level1 lfo17;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel verilerin güvenli bir biçimde
     saklanmasını sağlamak için hukuka uygun bir biçimde yedekleme programları
     kullanılmaktadır.</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l28 level1 lfo17;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Dijital olmayan veriler kilitli
     dolaplarda tutulmak suretiyle sadece yetkilendirilmiş kişiler tarafından
     erişilebilecektir.</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l28 level2 lfo17;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">DENETİM</span></li></ol></ul>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel Verileri Koruma
Kanunu’nun 12. maddesinin 3. fıkrası gereğince veri sorumlusu, kendi kurum veya
kuruluşunda, bu kanun hükümlerinin uygulanmasını sağlamak amacıyla gerekli
denetimleri yapmak veya yaptırmak zorundadır.</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l15 level1 lfo18;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l15 level2 lfo18;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l15 level3 lfo18;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel Verilerin Korunmasında Alınacak
       Tedbirlerin Denetimi</span></li></ol></ol></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirketimiz ve anlaşmalı
hukuki danışmanlık şirketimiz yukarıda açıklanan veri güvenliğinin tesisi ve
alınan tedbirlerin düzenliliğini ve devamlılığını sağlamak amacıyla gerekli
denetimleri yapar ve/veya yaptırır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Bu denetim sonuçları
şirketimizin iç işleyişi kapsamında konu ile ilgili departman veya yönetime
raporlanmakta ve alınan tedbirlerin iyileştirilmesi için gerekli faaliyetler
Kişisel Verileri Koruma Kanunu ve sair mevzuat ve işbu şirket politikasına
uygun şekilde yürütülmektedir.</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l42 level1 lfo19;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l42 level2 lfo19;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l42 level3 lfo19;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">İş Birimlerinin Kişisel Verilerinin
       Korunması ve İşlenmesi Konusunda Farkındalıklarının Artırılmasının
       Denetimi</span></li></ol></ol></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirketimiz, kişisel
verilerin hukuka aykırı olarak işlenmesini, verilere hukuka aykırı olarak
erişilmesini önlemeye ve verilerin korunmasını sağlamaya yönelik farkındalığın
artırılması için iş birimlerine gerekli eğitimlerin düzenlenmesini yürütülen
eğitimler, seminerler ve oturumlar aracılığı ile sağlamaktadır. Şirketimiz,
ilgili mevzuatın güncellenmesine paralel olarak eğitimlerini güncellemekte ve
yenilemektedir. Kişisel verilerin korunması konusunda farkındalığın oluşması
için gerekli sistemler kurulmakta, konuya ilişkin denetimleri şirketimizin
ilgili departmanı ve anlaşmalı hukuki danışmanlık şirketimiz yapmaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel verilerin
korunması ve işlenmesi konusunda farkındalığın artırılmasına yönelik yürütülen
eğitim sonuçları şirketimize raporlanmakta olup söz konusu eğitimlere katılım
şirketimiz tarafından zorunlu tutulmakta ve kontrol edilmektedir.</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l29 level1 lfo20;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l29 level2 lfo20;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">GİZLİLİK</span></li></ol></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirketimiz kişisel
verilerin kanun ve politika hükümlerine aykırı olacak şekilde açıklanmaları ve
aktarımını, bu verilere erişimin sağlanmasını ve meydana gelebilecek diğer
güvenlik eksikliklerinden kaynaklanan işlemleri önlemek adına, imkanlar
dahilinde ve korunacak kişisel verinin niteliğine göre gerekli her türlü
tedbiri almaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket personeline bu
konuda gerekli eğitimler verilmiş ve bu konuda bilgi sahibi personel istihdamı
sağlanmıştır. Şirket tarafından kişisel veri işleme faaliyetleri ise detaylı
şekilde ve periyodik olarak incelenmekte ve denetlenmektedir. Teknolojinin imkân
verdiği takdirde kişisel verilerin işlenmesi faaliyetlerinde gerekli önlemler
alınır ve alınan önlemlerin güncellenmesi ve iyileştirilmesi esastır.
Şirketimizin ilgili departmanı ve anlaşmalı hukuki danışmanlık şirketimiz bu
faaliyetleri yürütülmesinde ve denetlenmesinde koordine edilmiş şekilde
çalışmaktadır.</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l3 level1 lfo21;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l3 level2 lfo21;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">KİŞİSEL VERİLERİN YETKİSİZ İFŞASI</span></li></ol></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel verilerin
yetkisiz ifşasına ilişkin suçlar bakımından 5237 sayılı Türk Ceza Kanunu’nun
135 ila 140. madde hükümleri ve ilgili bütün mevzuat uygulanır. İlgili bütün
mevzuatın hükümleri şirketimizce çalışanlara ve ilgili kişilere bildirir.
Hukuka aykırı olarak kişisel verileri kaydetme, kişisel verileri hukuka aykırı
olarak bir başkasına verme, yayma veya ele geçirme,<a name="_bookmark7"></a>&nbsp;kanunların
belirlediği sürelerin geçmiş olmasına karşın verileri sistem içinde yok etmeme
ve Kişisel Verileri Koruma Kanunun 7. maddesi hükmüne aykırı olarak; kişisel
verilerin saklanmasını veya işlenmesini meşru kılan sebeplerin ortadan
kalkmasına rağmen kişisel verileri silmeyen veya anonim hâle getirmeyen gerçek
kişiler Türk Ceza Kanununun 138. maddesine göre hapis cezası ile cezalandırılır.
Kişisel verilerin silinmesine, yok edilmesine veya anonim hâle getirilmesine
ilişkin usul ve esaslar yönetmelikle düzenlenir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Türk Ceza Kanunu’nda
yapılan düzenlemelere göre kişisel verileri hukuka aykırı olarak bir başkasına
veren, bu verileri hukuka aykırı olarak yayan veya ele geçiren kişi, iki yıldan
dört yıla kadar hapis cezası ile cezalandırılmakla birlikte belli bir meslek ve
sanatın sağladığı kolaylıktan yararlanmak suretiyle bu suçu işleyen kişi
cezanın nitelikli halinden cezalandırılır. Kişisel veriyi işleme yetkisi
olmadan verileri görüntüleme, elde etme veya hack suçunu işleyen şirket
çalışanı, gecikmeksizin kişisel veri sahibine, savcılık ve ilgili makamlara
bildirilecek ve hakkında gerekli işlemler yürütülecek ve suçun nitelikli
halinden cezalandırılacaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel Verileri Koruma
Kanunu’nda Kabahatler başlığı altında düzenlenen hüküm gereğince aydınlatma
yükümlülüğünü veya veri güvenliğine ilişkin yükümlülükleri yerine
getirmeyenler, Kurul tarafından verilen kararları yerine getirmeyenler veya
Veri Sorumluları Siciline kayıt ve bildirim yükümlülüğüne aykırı hareket
edenler hakkında da idari para cezaları uygulanır.</span></p>

<h2 style="text-align:justify;mso-collapsed-heading:yes"><b><span lang="TR" style="font-size:12.0pt;font-family:Roboto;color:#030349">BÖLÜM 4: ŞİRKET
KİŞİSEL VERİLERİN KORUNMASINA YÖNELİK ORGANİZASYONEL TEDBİRLER</span></b><span lang="TR" style="font-size:12.0pt;font-family:Roboto;mso-bidi-font-family:&quot;Times New Roman&quot;;
color:#030349"></span></h2>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirketimiz Kişisel
Verilerin Korunması ile İşlenmesi Politikası’nın yürürlüğünü sağlamak için bir
yönetim yapısı oluşturmaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket bünyesinde işbu
Politika ve bu Politika’ya bağlı ve ilişkili diğer politikaları yönetmek üzere
komite kurulmaktadır. Kurulacak komitenin görevleri aşağıda belirtilmektedir.
Komite, bu görevlerin dışında üst yönetimin vereceği diğer görevleri de yerine
getirir. Komite tüm faaliyetlerini üst yönetimin onayı ile
gerçekleştirmektedir.</span></p><p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;color:#212529"><span style="mso-list:Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#212529"></span><span lang="TR" style="font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:&quot;Courier New&quot;;
mso-fareast-font-family:&quot;Courier New&quot;;color:#212529"><span style="mso-list:
Ignore">&nbsp;&nbsp;&nbsp;&nbsp; o<span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp; </span></span></span><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel Verilerin Korunması ve
       İşlenmesi ile ilgili temel politikaları ve gerekli olması halinde bu politikalar üzerinde yapılacak değişiklikleri hazırlamak,[3]</span></p><ul style="margin-top:0in" type="disc"><ul style="margin-top:0in" type="circle"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l49 level2 lfo22;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel Verilerin Korunması ve
      İşlenmesine ilişkin politikaların uygulanması ve uygulama takibinin ne
      şekilde yerine getirileceğine karar vermek,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l49 level2 lfo22;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">Şirket içi görevlendirmede bulunmak ve
      koordinasyonu sağlamak,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l49 level2 lfo22;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel Verilerin Korunması Kanunu ve
      ilgili mevzuata uyumun sağlanması için yapılması gereken hususları tespit
      etmek ve bu hususların uygulanmasını sağlamak,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l49 level2 lfo22;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel Verilerin Korunması ve İşlenmesi
      konusunda Şirket içerisinde ve Şirketin iş birliği yaptığı kurumlar
      nezdinde farkındalık yaratmak ve bu kapsamda eğitimler düzenlemek,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l49 level2 lfo22;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">Şirketin kişisel veri işleme
      faaliyetlerinde oluşabilecek riskleri tespit ederek gerekli önlemlerin
      alınmasını temin etmek,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l49 level2 lfo22;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel veri sahiplerinin başvurularını
      en üst düzeyde karara bağlamak,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l49 level2 lfo22;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel verilerin korunması konusundaki
      gelişmeleri ve düzenlemeleri takip etmek ve gerekli aksiyonları almak</span></li></ul></ul>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">İrtibat kişisi,
anlaşmalı hukuki danışmanlık şirketi ve kurum ile kurulacak iletişim için
şirket tarafından sicile kayıt esnasında bildirilen gerçek kişilerdir. Bu
bildirilecek gerçek kişi veya kişiler şirketimiz bünyesinde bu işi yapmakla
görevlendirilmiş departmanımız üyelerindendir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirketimiz Veri
Sorumluları Sicili Yönetmeliğine göre irtibat kişisinin fonksiyonunu iletişim
noktası olarak, ilgili kişilerin veri sorumlusuna yönelteceği taleplerin hızlı
ve etkin olarak cevaplandırılmasını sağlamak olarak sınırlandırmıştır. Bu yolla
kişisel verileri işlenen veri sahiplerinin sorunlarına veya sorularına en hızlı
ve açıklayıcı bir biçimde cevap verilmesi amaçlanmıştır fakat irtibat görevlisi
hukuki açıdan veri sorumlusunu temsile yetkili değildir. Bu sebeple bilgi
vermek haricinde, şirket ile veri sahibinin veya irtibat sorumlusu ile
iletişime geçen ilgilinin sorularını hukuka uygun bir biçimde cevaplamak ve
şirketimizi bu hususta bilgilendirmek haricinde bir görevi veya yetkisi
bulunmamaktadır. Şirketimiz irtibat sorumlusu tarafından bilgilendirildiği anda
yine şirketimiz tarafından görevlendirilmiş yetkili departman veya kurum
tarafından en kısa sürede sorunla ilgili işlemler yapılacak ve gereken prosedür
yürütülecektir. Bu işlemler sırasında kişisel veri sahibi veya ilgili kişi
bütün bu işlemler ve prosedürler ile ilgili bilgilendirilecek ve gerekirse
şirketimiz yetkili departmanı veya kurumu tarafından kişisel veri sahibi veya
ilgili kişilerle görüşmeler yürütülecektir.</span></p>

<h1 style="text-align:justify"><span lang="TR" style="font-family:Roboto;
color:#030349;font-weight:normal">&nbsp;</span></h1>

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0in 0in 0in 0in">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Şirketimiz, KVK Kanunu’nun 10. maddesine uygun olarak kişisel
  verilerin aktarıldığı kişi gruplarını kişisel veri sahibine bildirmektedir.</span></p>
  </td>
 </tr>
</tbody></table>

<h2 style="margin-top:0in;text-align:justify;mso-collapsed-heading:yes"><b><span lang="TR" style="font-family:&quot;inherit&quot;,serif;color:#030349"><br>
</span></b><b><span lang="TR" style="font-size:12.0pt;font-family:Roboto;
color:#030349">BÖLÜM 5: KİŞİSEL VERİLERİN AKTARILDIĞI ÜÇÜNCÜ KİŞİLER VE
AKTARILMA AMAÇLARI</span></b><span lang="TR" style="font-size:12.0pt;font-family:
Roboto;mso-bidi-font-family:&quot;Times New Roman&quot;;color:#030349"></span></h2>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">[4]</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirketimiz (<b>Talento
Sound Eğitim ve Danışmanlık Hizmetleri Ticaret Limited Şirketi</b>) KVK
Kanunu’nun 8. ve 9. maddelerine uygun olarak (</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">bkz.
Bölüm 2/Başlık 2.1.5</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">) politika ile yönetilen veri sahiplerinin kişisel verilerini
aşağıda sıralanan kişi kategorilerine aktarılabilir:</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirketin; (i) İş
ortaklarına, (ii) Tedarikçilerine, (iii) Topluluk şirketlerine, (iv)
Hissedarlarına, (v) Yetkililerine, (vi) Hukuken Yetkili kamu kurum ve
kuruluşlarına (vii) Hukuken yetkili özel hukuk kişilerine, aktarımda bulunulan
yukarıda belirtilen kişilerin kapsamı ve veri aktarım amaçları aşağıda
belirtilmektedir.</span></p>

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0in 0in 0in 0in">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Tanımı</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Veri Aktarım Amacı</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:1">
  <td rowspan="5" style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Topluluk- Grup Şirketleri</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Şirketimize bağlı iş ortaklıklarını</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Şirketlerinin</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:2">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">tanımlar. İş ortaklarımız ek</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">katılımını gerektiren her türlü</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:3;height:28.95pt">
  <td style="padding:0in 0in 0in 0in;height:28.95pt">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">kısmında açıklanmıştır.</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in;height:28.95pt">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">ticari ve organizasyonel</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:4">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">tedbirlerinin yürütülmesini</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:5">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">sağlamak amacıyla aktarılır.</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:6">
  <td rowspan="6" style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><a name="_bookmark9"></a><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Hissedarlar</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Şirketin hissedarı olan</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">İlgili mevzuat hükümlerine göre</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:7">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">gerçek kişiler</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">şirketler hukuku, etkinlik</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:8">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">yönetimi ve kurumsal</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:9">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">iletişim süreçleri kapsamında</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:10">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">yürüttüğü faaliyetlerin</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:11">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">amaçlarıyla sınırlıdır.</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:12">
  <td rowspan="7" style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Şirket Yetkilileri</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Şirket yönetim kurulu</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">İlgili mevzuat hükümlerine göre</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:13">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">üyeleri ve diğer yetkili gerçek</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">şirketin ticari faaliyetlerine</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:14">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">kişiler</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">ilişkin stratejilerin tasarlanması,</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:15">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">en üst düzeyde yönetiminin</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:16">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">sağlanması ve denetim</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:17">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">amaçlarıyla sınırlı olarak</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:18">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">aktarım yapılmaktadır</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:19">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Hukuken Yetkili Kamu Kurum</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">İlgili mevzuat hükümlerine</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">İlgili kamu kurum ve</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:20">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">ve Kuruluşları</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">göre şirketten bilgi ve</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">kuruluşlarının hukuki yetkisi</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:21">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">belge almaya yetkili kamu</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">dahilinde talep ettiği amaçla</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:22">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">kurum ve kuruluşları</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;sınırlı olarak aktarım yapılmaktadır</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:23">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Hukuken Yetkili Özel Hukuk</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">İlgili mevzuat hükümlerine</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">İlgili özel hukuk kişilerinin</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:24">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Kişileri</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">göre şirketten bilgi ve</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">hukuki yetkisi dahilinde talep</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:25">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">belge almaya yetkili özel</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">ettiği amaçla sınırlı olarak</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:26">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">hukuk kişileri</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">aktarım yapılmaktadır</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:27">
  <td rowspan="7" style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Tedarikçi</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Şirketin ticari faaliyetlerini</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Şirketin tedarikçiden temin</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:28">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">yürütürken şirket emir ve</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">ettiği ve şirketin ticari ve</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:29">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">talimatlarına uygun olarak</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">organizasyonel faaliyetlerini</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:30">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">sözleşme temelli, şirkete hizmet</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">yerine getirmek için gerekli</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:31">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">sunan tarafları</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">hizmetlerin sunulmasını</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:32">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">tanımlamaktadır.</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">sağlamak amacıyla aktarım</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:33;mso-yfti-lastrow:yes">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">yapılmaktadır.</span></p>
  </td>
 </tr>
</tbody></table>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<h2 style="text-align:justify;mso-collapsed-heading:yes"><b><span lang="TR" style="font-size:12.0pt;font-family:Roboto;color:#030349">BÖLÜM 6: KİŞİSEL
VERİLERİN SİLİNMESİ, SAKLAMA SÜRELERİ ve VERİ ENVANTERİ</span></b><span lang="TR" style="font-size:12.0pt;font-family:Roboto;mso-bidi-font-family:&quot;Times New Roman&quot;;
color:#030349"></span></h2>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l10 level1 lfo23;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l10 level2 lfo23;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">ŞİRKETİMİZİN YÜKÜMLÜLÜĞÜ</span></li></ol></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirketimiz, 6698 sayılı
Kişisel Verilerin Korunması Kanunu madde 7 ve 5237 sayılı Türk Ceza Kanunu
madde 138’deki açıklamalara uygun olarak işlenilmiş ve akabinde işleme ve
saklama amacı ortadan kalkmış kişisel verileri Türk Ticaret Kanunu’ndan
kaynaklanan haklara, ilgili bütün mevzuat hükümlerinin vermiş olduğu haklara ve
işbu politikada belirlenen esaslara(bkz. Bölüm 2.2.1 (e) ve (f) ) istinaden
vereceği karar ile veya şirketimizin ticari hayatındaki menfaatlerini zarar
getirmeyecek şekilde veri sahibinin açık talebiyle, Kişisel Verilerin Korunması
Kanunu madde 7 de belirtildiği gibi siler veya yok eder veya anonimleştirilir.</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l38 level1 lfo24;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l38 level2 lfo24;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">KİŞİSEL VERİLERİN SİLİNMESİ, SAKLAMA
      SÜRELERİ VE VERİ ENVANTERİ</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l38 level3 lfo24;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;Kişisel Verilerin Silinmesi ve
       Yok Edilmesi</span></li></ol></ol></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel verilerin
silinmesi, yönetmeliğin 8.maddesinde ‘’kişisel verilerin ilgili kullanıcılar
için hiçbir şekilde erişilemez ve tekrar kullanılamaz hale getirilmesi
işlemidir’’ şeklinde tanımlanmıştır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel verilerin yok
edilmesi, yönetmeliğin 9.maddesinde ‘’kişisel verilerin hiç kimse tarafından
hiçbir şekilde erişilemez, geri getirilemez ve tekrar kullanılamaz hale
getirilmesi işlemidir’’ şeklinde tanımlanmıştır.</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l19 level1 lfo25;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l19 level2 lfo25;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l19 level3 lfo25;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel Verilerin Silinme Yöntemleri</span></li></ol></ol><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l19 level1 lfo25;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Hizmet Olarak Uygulama Türü Bulut
     Çözümleri(Office 365,Salesforce vs.)</span></li></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Bulut sistemindeki
veriler silme komutu verilerek silinir. Anılan işlem gerçekleşirken ilgili
kullanıcı bulut sistemi üzerinde silinmiş verileri geri getirme yetkisine sahip
değildir.</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l48 level1 lfo26;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Kağıt Ortamında Bulunan Kişisel Veriler</span></li></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kağıt ortamında bulunan
kişisel veriler karartma yöntemi kullanılarak silinir. Karartma yöntemi, ilgili
evrak üzerindeki kişisel verilerin, mümkün olan durumlarda kesilmesi, mümkün
olmayan durumlarda ise geri döndürülmeyecek ve teknolojik çözümlerle okunamayacak
şekilde sabit mürekkep kullanılarak ilgili kullanıcıların görünemez hale
getirilmesi şeklinde yapılır.</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l35 level1 lfo27;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Merkezi Sunucuda Yer Alan Ofis Dosyaları</span></li></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Dosyanın işletim
sistemindeki silme komutu ile silinmesi veya dosya ya da dosyanın bulunduğu
dizin üzerinde ilgili kullanıcının erişim haklarının kaldırılmasıdır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">ç) Taşınabilir Medyada
Bulunan Kişisel Veriler</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Flash tabanlı saklama
ortamlarındaki kişisel veriler, şifreli olarak saklanır ve bu ortamlara uygun
yazılımlar kullanılarak silinir</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l32 level1 lfo28;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Veri Tabanları</span></li></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel verilerin
bulunduğu ilgili satırların veri tabanı komutları ile silinir. Anılan işlemi
gerçekleştiren ilgili kişi veri tabanı yöneticisi değildir.</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l36 level1 lfo29;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l36 level2 lfo29;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l36 level3 lfo29;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel Verilerin Yok Edilmesi
       Yöntemleri</span></li></ol></ol><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l36 level1 lfo29;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Fiziksel Olarak Yok Etme</span></li></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel veriler
herhangi bir veri kayıt sisteminin parçası olmak kaydıyla otomatik olmayan
yollarla da işlenebilmektedir. Bu tür veriler yok edilirken kişisel verinin
sonradan kullanılmayacak biçimde fiziksel olarak yok edilmesi uygulanmaktadır.</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l20 level1 lfo30;
     tab-stops:list .5in"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">De-manyetize Etme</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;"></span></li></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Manyetik medyanın özel
bir cihazdan geçirilerek yüksek değerde bir manyetik alana maruz bırakılması
ile üzerindeki verilerin anlaşılamaz ve okunamaz bir hale getirilme işlemidir.</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l4 level1 lfo31;
     tab-stops:list .5in"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Kağıt Ortamları</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;"></span></li></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Bu ortamdaki yok etme
işlemleri kağıtların imha ve kırpma makineleri ile anlaşılmaz boyutlara
getirilerek yok edilmesi yöntemidir.</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l25 level1 lfo32;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l25 level2 lfo32;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l25 level3 lfo32;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel Verilerin Anonim Hale
       Getirilmesi</span></li></ol></ol></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel verilerin
anonim hale getirilmesi, yönetmeliğin 10.maddesinde ‘’kişisel verilerin başka
verilerle eşleştirilse dahi hiçbir surette kimliği belirli veya belirlenebilir
gerçek kişiyle ilişkilendirilemeyecek hale getirilmesidir. ’’şeklinde
tanımlanmıştır.</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l27 level1 lfo33;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l27 level2 lfo33;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l27 level3 lfo33;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l27 level4 lfo33;
        tab-stops:list 2.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
        mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel Verilerin Anonim Hale
        Getirilme Yöntemleri</span></li></ol></ol></ol><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l27 level1 lfo33;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Maskeleme Yöntemi (Masking)</span></li></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Verileri işlenen veri
sahiplerinin belirgin sıfatlarının veya özelliklerinin çıkarılarak veya
silinerek sağlanan bir anonim hale getirme yöntemidir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0in 0in 0in 0in">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;Örnek: Kişisel Veri Sahibinin tanımlanmasını sağlayan TC
  Kimlik No vb. gibi bilginin çıkartılması yoluyla veri sahibinin tanınmasının
  engellenmesi.</span></p>
  </td>
 </tr>
</tbody></table>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l44 level1 lfo34;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Veri Karma Yöntemi (Data
     Shuffling,Permutation)</span></li></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Bu yöntemle sistem
içerisinde verileri olan veri sahiplerinin bilgilerinin bir kısmının yerini
değiştirerek verileri anonim hale getirmek amaçlanmaktadır</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0in 0in 0in 0in">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;Örnek: Çalışan bilgilerinde ana kategori olarak
  değerlendirilen verilerin yanında alt değerli bilgilerin yer değiştirilmesi
  suretiyle Kişisel Veri Sahibinin tanınmamasını sağlama.</span></p>
  </td>
 </tr>
</tbody></table>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l37 level1 lfo35;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Veri Türetme Yöntemi (Data Derivation)</span></li></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Sistemde içerisinde yer
alan verilerde bulunan değişkenlerde belli ölçülerde ekleme veya çıkarma
yapılarak bilgilerin tespit edilemeyecek veya tanımlanamayacak hale gelmesi
sağlanır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0in 0in 0in 0in">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;Örnek: Verisi işlenen kişisel veri sahibinin
  ikametgahının detaylı açıklanmasının yerine yaşadığı mahalle veya ilçenin
  belirtilmesi.</span></p>
  </td>
 </tr>
</tbody></table>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l8 level1 lfo36;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Toplulaştırma Yöntemi (Aggregation)</span></li></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">İlgili kişisel veriyi
özel bir değerden genel bir değere çevirme yöntemidir. Bu yöntemle veriler
genelleştirilmekte ve kişisel veriler herhangi bir kişiyle
ilişkilendirilemeyecek hale getirilmektedir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0in 0in 0in 0in">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;Örnek: Çalışanların yaşadığı mahallelerin tek tek
  sayılması yerine X mahallesinde Y kadar çalışanın yaşadığının belirtilmesi.</span></p>
  </td>
 </tr>
</tbody></table>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l14 level1 lfo37;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l14 level2 lfo37;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l14 level3 lfo37;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l14 level4 lfo37;
        tab-stops:list 2.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
        mso-bidi-font-family:&quot;Segoe UI&quot;">Şirketimizin Anonim Hale Getirme
        Yöntemini Seçme Usulü</span></li></ol></ol></ol></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Yukarıda açıklanan
anonimleştirme yöntemlerinden bir veya birkaçı, ilgili bütün mevzuat ve şirketimizin
iş hayatındaki menfaatleri doğrultusunda, şirket tarafından işbu politikanın
yürürlüğünü sağlamak için oluşturulan komite tarafından seçilecektir. Komite
ile ilgili ayrıntılı bilgiler daha önceki bölümde açıklanmıştır. (</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">&nbsp;bkz. bölüm 4)</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Seçilecek anonim hale
getirme yöntemi, komite tarafından aşağıda sayılan hususlar dikkate alınarak
belirlenecektir:</span></p>

<ul style="margin-top:0in" type="disc"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l52 level1 lfo38;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Verinin niteliği</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l52 level1 lfo38;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Verinin büyüklüğü</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l52 level1 lfo38;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Verinin fiziki ortamlarda bulunma yapısı</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l52 level1 lfo38;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Verinin çeşitliliği</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l52 level1 lfo38;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Verinin işlenme amacı</span></li></ul>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Anonim Hale Getirme
işlemi işbu politikanın saklama süreleri ve kişisel veri envanteri bölümlerinde
belirtilen esaslara paralel olarak gerçekleştirecektir.</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l41 level1 lfo39;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l41 level2 lfo39;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">SAKLAMA SÜRELERİ</span></li></ol></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirketimiz, ilgili
bütün mevzuatta belirlenen sürelere uygun olarak, veri envanterinde kişisel
verileri saklamaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Bu süreleri ilişkin
ilgili mevzuatta belirlenen herhangi bir sürenin bulunmaması durumunda
Şirketimiz, bulunduğu sektörden kaynaklanan teamüller ve kanun ve mevzuata
uygun olmak şartıyla şirketimizin menfaatlerine uygun olarak belirlediği
süreler içerisinde kişisel verileri saklamaktadır, saklama işlemine gerek
kalmadığı durumlarda yukarıda açıklanan şekillerde silinir veya yok edilir veya
anonimleştirilir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel verilerin
işleme ve saklama amacı ortadan kalkmış ve kişisel verilere ilişkin ilgili
bütün mevzuatta ve şirketimiz tarafından işbu politikada belirlenen
esaslara&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">(bkz. bölüm 2.2.1 (e) ve
(f))&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">istinaden belirlenen süreler geçmiş ise ileride doğabilecek her
türlü hukuki uyuşmazlıklarda kullanılmak amacıyla da kişisel veriler
saklanabilmektedir. Bu kısımda belirtilen kişisel veriler sadece hukuki
uyuşmazlıklarda kullanılmak üzere saklanır ve başka&nbsp;herhangi bir amaç için
kullanılamaz. Yukarıdaki açıklamalar doğrultusunda şirketimiz tarafından,
öngörülebilecek bütün önlem ve tedbirler alınmaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Örneğin, İşyerinden
ayrılan çalışan aleyhine, sözleşmenin haksız feshedilmesinden kaynaklı açılacak
davada yetkili mahkemenin belirlenmesi amacıyla çalışanın yerleşim bölgesinin
tespitinin yapılması için veri sisteminde bulunan bilgilerin kullanılması bu
kapsamda değerlendirilebilir. (Yukarıdaki açıklamaların kapsamı verilen örnek
ile sınırlı değildir.)</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l45 level1 lfo40;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l45 level2 lfo40;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">KİŞİSEL VERİ ENVANTERİ</span></li></ol></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">KVKK ve Veri
Sorumluları Sicili Hakkında Yönetmelik’e uygun olarak şirketimiz bünyesinde
bulunan her departmanda ayrı ayrı işlenen verilerin toplandığı ve yukarıda
açıklandığı şekillerde silme, yok etme, anonimleştirme işleminin mevzuata ve
şirket politikasına uygun olarak gerçekleştirildiği ve gerektiğinde KVK
Kurumuna ibraz edilebilen datayı (Word, excel vs.) ifade etmektedir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Yönetmelikteki tanıma
göre bir kişisel veri envanterinde bulunması gerekenler:</span><span lang="TR" style="font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;color:#212529"><span style="mso-list:Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span></p><ul style="margin-top:0in" type="disc"><ul style="margin-top:0in" type="circle"><ul style="margin-top:0in" type="square"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l33 level3 lfo41;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel veri işleme amaçları</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l33 level3 lfo41;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Veri Kategorisi</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l33 level3 lfo41;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Aktarılan alıcı grubu ve veri konusu
       kişi grubuyla ilişkilendirilerek oluşturulan ve kişisel verilerin
       işlenmesi için gerekli olan azami süreler</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l33 level3 lfo41;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Yabancı ülkelere aktarımı öngörülen
       kişisel süreler</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l33 level3 lfo41;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Veri güvenliğine ilişkin alınan
       tedbirler</span></li></ul></ul></ul>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Yukarıda belirtilen
kriterler göz önüne alınarak kişisel verilerle ilgili olarak bu verilerle
yapılacak işlemlere ilişkin bilgiler ilgili envanterde toplanacaktır. Envanter
içeriği, şirketimizin kanuna ve mevzuata uygun olarak kendi menfaatleri
doğrultusunda Word, Excel gibi dijital ortamlarda saklanabileceği gibi dijital
ortamlarda saklanması mümkün olmayan içerik kağıt ortamlarında da
saklanabilmektedir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Bölüm 6 ‘da açıklanan
kişisel verileri silme, yok etme, anonimleştirme işlemleri şirketimiz
tarafından veya şirketimizin yetki verdiği bir görevli tarafından kişisel veri
envanterinde gerçekleştirilir.</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l43 level1 lfo42;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l43 level2 lfo42;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l43 level3 lfo42;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel Veri Envanterinin Hazırlanışı</span></li></ol></ol></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel Veri
Envanterinin hazırlanılış usulüne ilişkin ilgili mevzuatta hüküm varsa kişisel
veri envanteri bu hükümler doğrultusunda şirketimiz tarafından hazırlanacaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel Veri
Envanterinin hazırlanış usulüne ilişkin ilgili mevzuatta hüküm olmadığı
durumlarda şirketimiz, kendi iç çalışma disiplini, iş çalışma süreçlerini de
dikkate alarak kişisel veri envanterini hazırlama hususunda hangi usulü
seçeceği konusunda serbesttir.</span></p>

<h2 style="text-align:justify;mso-collapsed-heading:yes"><b><span lang="TR" style="font-size:12.0pt;font-family:Roboto;color:#030349">BÖLÜM 7: VERİ
SAHİBİNİN HAKLARI VE BU HAKLARIN KULLANILMASINA İLİŞKİN KURALLAR</span></b><span lang="TR" style="font-size:12.0pt;font-family:Roboto;mso-bidi-font-family:&quot;Times New Roman&quot;;
color:#030349"></span></h2>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l26 level1 lfo43;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l26 level2 lfo43;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">KİŞİSEL VERİ SAHİBİNİN HAKLARI</span></li></ol></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirketimiz, kişisel
veri sahiplerinin haklarının değerlendirilmesi ve kişisel veri sahiplerine
gereken bilgilendirmenin yapılması için Kişisel Verileri Koruma Kanunu’nun 13.
maddesine uygun olarak gerekli kanalları, iç işleyişi, idari ve teknik
düzenlemeleri yürütmektedir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel veri sahipleri
aşağıda sıralanan haklarına ilişkin taleplerini yazılı olarak şirketimize
iletmeleri durumunda şirketimiz talebin niteliğine göre talebi en geç otuz gün
içinde ücretsiz olarak sonuçlandırmaktadır. Ancak, Kişisel Verileri Koruma Kurulunca
bir ücret öngörülmesi hâlinde, şirketimiz tarafından başvuru sahibinden Kişisel
Verileri Koruma Kurulunca belirlenen tarifedeki ücret alınacaktır. Kişisel veri
sahipleri;</span><span lang="TR" style="font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:Symbol;
mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;color:#212529"><span style="mso-list:Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#212529"></span><span lang="TR" style="font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:&quot;Courier New&quot;;
mso-fareast-font-family:&quot;Courier New&quot;;color:#212529"><span style="mso-list:
Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp; </span></span></span><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#212529"><br></span></p>

<ul style="margin-top:0in" type="disc"><ul style="margin-top:0in" type="circle"><ul style="margin-top:0in" type="square"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l17 level3 lfo44;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel veri işlenip işlenmediğini
       öğrenme,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l17 level3 lfo44;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel verileri işlenmişse buna
       ilişkin bilgi talep etme,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l17 level3 lfo44;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel verilerin işlenme amacını ve
       bunların amacına uygun kullanılıp kullanılmadığını öğrenme,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l17 level3 lfo44;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Yurt içinde veya yurt dışında kişisel
       verilerin aktarıldığı üçüncü kişileri bilme,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l17 level3 lfo44;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel verilerin eksik veya yanlış
       işlenmiş olması hâlinde bunların düzeltilmesini isteme ve bu kapsamda
       yapılan işlemin kişisel verilerin aktarıldığı üçüncü kişilere
       bildirilmesini isteme,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l17 level3 lfo44;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel Verileri Koruma Kanunu ve
       ilgili diğer kanun hükümlerine uygun olarak işlenmiş olmasına rağmen,
       işlenmesini gerektiren sebeplerin ortadan kalkması hâlinde kişisel
       verilerin silinmesini veya yok edilmesini isteme ve bu kapsamda yapılan
       işlemin kişisel verilerin aktarıldığı üçüncü kişilere bildirilmesini
       isteme,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l17 level3 lfo44;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">İşlenen verilerin münhasıran otomatik
       sistemler vasıtasıyla analiz edilmesi suretiyle kişinin kendisi aleyhine
       bir sonucun ortaya çıkmasına itiraz etme,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l17 level3 lfo44;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel verilerin kanuna aykırı olarak
       işlenmesi sebebiyle zarara uğraması hâlinde zararın giderilmesini talep
       etme haklarına sahiptir.</span></li></ul></ul></ul>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel Verileri Koruma
Kanunu’nun 13. maddesi gereğince, kişisel veri sahiplerinin yukarıda belirtilen
haklarını kullanmakla ilgili taleplerini “yazılı” veya Kişisel Verilerin
Korunması Kurulu’nun belirlediği diğer yöntemlerle Şirketimize iletmeleri gerekmektedir.</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo45;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level2 lfo45;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level3 lfo45;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel Verilere Erişim Hakkı</span></li></ol></ol></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">İlgili kişilerin bir
ücrete tabi olmadan kişisel verilerine erişim hakkı bulunmaktadır. Şirketin
menfaati ve veriyi tutmasında meşru hakkı Kişisel Verileri Koruma Kanunu ve
ilgili mevzuat kapsamında korunur; değiştirme ve silme hakkı gözetilir.
Şirketimiz ilgili kişiye;</span><span lang="TR" style="font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:&quot;Courier New&quot;;
mso-fareast-font-family:&quot;Courier New&quot;;color:#212529"><span style="mso-list:
Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp; </span></span></span><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#212529"><br></span></p>



<ul style="margin-top:0in" type="disc"><ul style="margin-top:0in" type="circle"><ul style="margin-top:0in" type="square"><ul style="margin-top:0in" type="square"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l7 level4 lfo46;
        tab-stops:list 2.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
        mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel verilerinin işlenip
        işlenmediğini öğrenme,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l7 level4 lfo46;
        tab-stops:list 2.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
        mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel verileri işlenmişse buna
        ilişkin bilgi talep etme,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l7 level4 lfo46;
        tab-stops:list 2.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
        mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel verilerinin işlenme amacını ve
        bunların amacına uygun kullanılıp kullanılmadığını öğrenme,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l7 level4 lfo46;
        tab-stops:list 2.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
        mso-bidi-font-family:&quot;Segoe UI&quot;">Yurt içinde veya yurt dışında kişisel
        verilerinin aktarıldığı üçüncü kişileri bilme isteğinde bulunma hakkı
        olduğu bilgisini vermektedir.</span></li></ul><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l7 level3 lfo46;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel Verilerini Değiştirme veya
       Sildirme Hakkı</span></li></ul></ul></ul>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">İlgili kişilerin bir
ücrete tabi olmadan kişisel verilerini değiştirme veya sildirme hakkı
bulunmaktadır. Bu kapsamda ilgili kişinin;</span></p>







<ul style="margin-top:0in" type="disc"><ul style="margin-top:0in" type="circle"><ul style="margin-top:0in" type="square"><ul style="margin-top:0in" type="square"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l21 level4 lfo47;
        tab-stops:list 2.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
        mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel verilerinin eksik veya yanlış
        işlenmiş olması halinde bunların düzeltilmesini isteme,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l21 level4 lfo47;
        tab-stops:list 2.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
        mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel verilerinin işlenmesini
        gerektiren sebeplerin ortadan kalkması halinde kişisel verilerin
        silinmesini veya yok edilmesini isteme,</span></li></ul></ul></ul></ul>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Veri sorumlusu
başvuruda yer alan talepleri, talebin niteliğine göre en kısa sürede ve en geç
otuz gün içinde ücretsiz olarak sonuçlandırır. Ancak, işlemin ayrıca bir
maliyeti gerektirmesi hâlinde, Kurulca belirlenen tarifedeki ücret alınabilir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Veri sorumlusu talebi
kabul eder veya gerekçesini açıklayarak reddeder ve cevabını ilgili kişiye
yazılı olarak veya elektronik ortamda bildirir. Başvuruda yer alan talebin
kabul edilmesi hâlinde veri sorumlusunca gereği yerine getirilir. Başvurunun
veri sorumlusunun hatasından kaynaklanması hâlinde alınan ücret ilgiliye iade
edilir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Yukarıda bahsedilen
düzeltme, silme veya yok etme işlemlerinin, kişisel verilerinin aktarıldığı
üçüncü kişilere bildirilmesini isteme ve işlenen verilerin münhasıran otomatik
sistemler vasıtasıyla analiz edilmesi suretiyle aleyhe bir sonuç ortaya çıkmasına
itiraz etme hakkı bulunmaktadır.</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l16 level1 lfo48;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l16 level2 lfo48;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l16 level3 lfo48;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel Verilerin Güncelliğinin
       Sağlanması</span></li></ol></ol></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel Verileri Koruma
Kanunu uyarınca kişisel verilerin doğru ve gerektiğinde güncel olmasını sağlama
yükümlülüğü bulunmaktadır, bu sebeple kişisel verilerin doğru ve güncel
tutulması açısından ilgili tarafından şirketimize mevcut durum değişikliklerinin
bildirilmesi gerekir. Şayet veri değişikliğinin ilgili kişi tarafından yazılı
olarak şirketimize bildirilmediği taktirde verinin güncellenmemesi nedeniyle
ortaya çıkan ya da çıkabilecek herhangi bir zarar ve yaptırımdan şirketimiz
sorumlu değildir.</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l11 level1 lfo49;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l11 level2 lfo49;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">VERİ SAHİBİNİN HAKLARININ GÖZETİLMESİ</span></li></ol></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel Verileri Koruma
Kanunu’nun 12. maddesi gereğince veri sorumlusu;</span><span lang="TR" style="font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:&quot;Courier New&quot;;
mso-fareast-font-family:&quot;Courier New&quot;;color:#212529"><span style="mso-list:
Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp; </span></span></span><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#212529"><br></span></p>

<ul style="margin-top:0in" type="disc"><ul style="margin-top:0in" type="circle"><ul style="margin-top:0in" type="square"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l50 level3 lfo50;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel verilerin hukuka aykırı olarak
       işlenmesini önlemek,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l50 level3 lfo50;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel verilere hukuka aykırı olarak
       erişilmesini önlemek</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l50 level3 lfo50;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel verilerin muhafazasını
       sağlamak, amacıyla uygun güvenlik düzeyini temin etmeye yönelik gerekli
       her türlü teknik ve idari tedbirleri almak zorundadır.</span></li></ul></ul></ul>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirketimiz, ilgili
kanun maddesi gereğince kişisel verilerin kendi adına başka bir gerçek veya
tüzel kişi tarafından işlenmesi halinde birinci fıkrada belirtilen tedbirlerin
alınması hususunda bu kişilerle birlikte müştereken ve müteselsilen sorumludur.
Şirketimiz kendi kurum veya kuruluşunda bu kanun hükümlerinin uygulanmasını
sağlamak amacıyla gerekli denetimleri yapmaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket tarafından işbu
hüküm tüm sözleşme, taahhüt – mutabakat metinlerine eklenerek işbu politikanın
5. Bölümünün 13. sayfasında veri aktarımı yapabilecek kişiler ile
paylaşılmıştır; fiili imkânsızlık sebebiyle ya da hayatın olağan akışına uygun
olmaması nedeniyle sözleşme veya mutabakat metni oluşturulamayan hallerde ise
https://talentosound.com internet sitesinden işbu politika kamuya açık hale
getirildiğinden görülebilir.</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l31 level1 lfo51;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></li><ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l31 level2 lfo51;
      tab-stops:list 1.0in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
      mso-bidi-font-family:&quot;Segoe UI&quot;">KİŞİSEL VERİ SAHİBİNİN HAKLARINI İLERİ
      SÜREMEYECEĞİ HALLER</span></li></ol></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel veri sahipleri,
Kişisel Verileri Koruma Kanunu’nun 28. maddesi gereğince aşağıdaki haller
ilgili kanun kapsamı dışında tutulduğundan, kişisel veri sahiplerinin bu
konularda aşağıda sayılan haklarını ileri süremezler:</span><span lang="TR" style="font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:&quot;Courier New&quot;;
mso-fareast-font-family:&quot;Courier New&quot;;color:#212529"><span style="mso-list:
Ignore"><span style="font:7.0pt &quot;Times New Roman&quot;">&nbsp; </span></span></span><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#212529"><br></span></p>

<ul style="margin-top:0in" type="disc"><ul style="margin-top:0in" type="circle"><ul style="margin-top:0in" type="square"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l54 level3 lfo52;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel verilerin resmi istatistik ile
       anonim hâle getirilmek suretiyle araştırma, planlama ve istatistik gibi
       amaçlarla işlenmesi,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l54 level3 lfo52;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel verilerin millî savunmayı,
       millî güvenliği, kamu güvenliğini, kamu düzenini, ekonomik güvenliği,
       özel hayatın gizliliğini veya kişilik haklarını ihlal etmemek ya da suç
       teşkil etmemek kaydıyla, sanat, tarih, edebiyat veya bilimsel amaçlarla
       ya da ifade özgürlüğü kapsamında işlenmesi,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l54 level3 lfo52;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel verilerin millî savunmayı,
       millî güvenliği, kamu güvenliğini, kamu düzenini veya ekonomik güvenliği
       sağlamaya yönelik olarak kanunla görev ve yetki verilmiş kamu kurum ve
       kuruluşları tarafından yürütülen önleyici, koruyucu ve istihbarı
       faaliyetler kapsamında işlenmesi ve</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l54 level3 lfo52;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel verilerin soruşturma,
       kovuşturma, yargılama veya infaz işlemlerine ilişkin olarak yargı
       makamları veya infaz mercileri tarafından işlenmesi.</span></li></ul></ul></ul>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel Verileri Koruma
Kanunu’nun 28. maddesi gereğince; aşağıda sıralanan hallerde kişisel veri
sahipleri zararın giderilmesini talep etme hakkı hariç diğer haklarını ileri
süremezler:</span><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#212529"> <br></span></p>

<ul style="margin-top:0in" type="disc"><ul style="margin-top:0in" type="circle"><ul style="margin-top:0in" type="square"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l22 level3 lfo53;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel veri işlemenin suç işlenmesinin
       önlenmesi veya suç soruşturması için gerekli olması,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l22 level3 lfo53;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel veri sahibi tarafından kendisi
       tarafından alenileştirilmiş kişisel verilerin işlenmesi,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l22 level3 lfo53;
       tab-stops:list 1.5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
       mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel veri işlemenin kanunun verdiği
       yetkiye dayanılarak görevli ve yetkili kamu kurum ve kuruluşları ile
       kamu kurumu niteliğindeki meslek kuruluşlarınca, denetleme veya
       düzenleme görevlerinin yürütülmesi ile disiplin soruşturma veya
       kovuşturması için gerekli olması.</span></li></ul></ul></ul>

<h2 style="text-align:justify;mso-collapsed-heading:yes"><b><span lang="TR" style="font-size:12.0pt;font-family:Roboto;color:#030349">BÖLÜM 8: ÇALIŞAN
ADAYLARININ KİŞİSEL VERİLERİNİN İŞLENMESİ</span></b><span lang="TR" style="font-size:12.0pt;font-family:Roboto;mso-bidi-font-family:&quot;Times New Roman&quot;;
color:#030349"></span></h2>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Çalışan adaylarının işe
alım sürecinde toplanan kişisel verileri ile işin niteliğine göre toplanan özel
nitelikli kişisel verileri, Şirket tarafından; belirtilen ve aşağıda sıralanan
amaçlarla işlenmektedir:</span></p>

<ul style="margin-top:0in" type="disc"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l30 level1 lfo54;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Çalışan adayının niteliğini, tecrübesini
     ve ilgisini açık pozisyona uygunluğunu değerlendirmek,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l30 level1 lfo54;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Gerektiği takdirde, Çalışan adayının
     ilettiği bilgilerin doğruluğunun kontrolünü yapmak veya üçüncü kişilerle
     iletişime geçip Çalışan Adayı hakkında araştırma yapmak,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l30 level1 lfo54;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Başvuru ve işe alım süreci hakkında
     Çalışan Adayı ile iletişime geçmek veya uygun olduğu takdirde, sonradan
     yurtiçinde veya yurtdışında açılan herhangi bir pozisyon için aday ile
     iletişime geçmek,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l30 level1 lfo54;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">İlgili mevzuatın gereklerini ya da
     yetkili kurum veya kuruluşların taleplerini karşılamak,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l30 level1 lfo54;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Şirketimizin uyguladığı işe alım
     ilkelerini geliştirmek ve iyileştirmek. Çalışan adaylarının kişisel
     verileri aşağıdaki yöntem ve vasıtalarla toplanabilmektedir:</span></li></ul>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Yazılı veya elektronik
ortamda yayınlanan dijital başvuru formu;</span></p>

<ul style="margin-top:0in" type="disc"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l40 level1 lfo55;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Çalışan adaylarının Şirkete e-posta,
     kargo, referans ve benzeri yöntemlerle ulaştırdıkları özgeçmişler;</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l40 level1 lfo55;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">İstihdam veya danışmanlık şirketleri;
     Çalışan adayları da veri sahibi olmalarından kaynaklanan hakları ile
     ilgili taleplerini açıklanan yöntemle iletebileceklerdir.</span></li></ul>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Video konferans,
telefon gibi araçlarla veya yüz yüze mülakat yapılan hallerde, mülakat
sırasında;</span></p>

<ul style="margin-top:0in" type="disc"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l51 level1 lfo56;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Çalışan adayı tarafından iletilen
     bilgilerin doğruluğunu teyit etmek amacıyla yapılan kontroller ile şirket
     tarafından yapılan araştırmalar;</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l51 level1 lfo56;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Tecrübesi olan uzman kişiler tarafından
     yapılan ve sonuçları incelenen yetenek ve kişilik özelliklerini tespit
     eden işe alım testleri</span></li></ul>

<h2 style="text-align:justify;mso-collapsed-heading:yes"><b><span lang="TR" style="font-size:12.0pt;font-family:Roboto;color:#030349">BÖLÜM 9: ŞİRKET
TESİSLERİ İÇERİSİNDE YAPILAN KİŞİSEL VERİ İŞLEME FAALİYETLERİ İLE İNTERNET
SİTESİ ÜZERİNDEN YAPILAN VERİ İŞLEME FAALİYETLERİ BİNA, TESİS GİRİŞLERİ İLE
BİNA TESİS İÇERİSİNDE YAPILAN KİŞİSEL VERİ İŞLEME FAALİYETLERİ</span></b><span lang="TR" style="font-size:12.0pt;font-family:Roboto;mso-bidi-font-family:&quot;Times New Roman&quot;;
color:#030349"></span></h2>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket tarafından bina
tesis girişlerinde ve tesis içerisinde yapılan kişisel veri işleme
faaliyetleri, Anayasa’ya, KVK Kanunu’na ve ilgili diğer mevzuata uygun bir
biçimde yürütülmektedir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket tarafından
güvenliğin sağlanması amacıyla, Şirket binalarında ve tesislerinde güvenlik
kamerasıyla izleme faaliyeti ile misafir giriş çıkışlarının takibine yönelik
kişisel veri işleme faaliyetinde bulunulmaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Güvenlik kameraları
kullanılması ve misafir giriş çıkışlarının kayıt altına alınması yoluyla Şirket
tarafından kişisel veri işleme faaliyeti yürütülmüş olmaktadır.</span></p>

<h2 style="text-align:justify;mso-collapsed-heading:yes"><b><span lang="TR" style="font-size:12.0pt;font-family:Roboto;color:#030349">9.1. ŞİRKETİN BİNA,
TESİS GİRİŞLERİNDE VE İÇERİSİNDE YÜRÜTÜLEN KAMERA İLE İZLEME FAALİYETİ</span></b><span lang="TR" style="font-size:12.0pt;font-family:Roboto;mso-bidi-font-family:&quot;Times New Roman&quot;;
color:#030349"></span></h2>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Bu bölümde Şirketin
kamera ile izleme sistemine ilişkin açıklamalar yapılacak ve kişisel verilerin,
gizliliğinin ve kişinin temel haklarının nasıl korumaya alındığına ilişkin
bilgilendirme yapılacaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket, güvenlik
kamerası ile izleme faaliyeti kapsamında; şirketin ve diğer kişilerin
güvenliğini sağlamaya ilişkin menfaatlerini korumak gibi amaçlar taşımaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kamera ile İzleme
Faaliyetinin Yasal Dayanağı</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket tarafından
yürütülen kamera ile izleme faaliyeti, Özel Güvenlik Hizmetlerine Dair Kanun ve
ilgili mevzuata uygun olarak sürdürülmektedir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">KVK Kanununa Göre
Güvenlik Kamerası ile İzleme Faaliyeti Yürütülmesi</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket tarafından
güvenlik amacıyla kamera ile izleme faaliyeti yürütülmesinde KVK Kanunu’nda yer
alan düzenlemelere uygun hareket edilmektedir. Şirket, bina ve tesislerinde
güvenliğin sağlanması amacıyla, yürürlükte bulunan ilgili mevzuatta öngörülen
amaçlarla ve KVK Kanunu’nda sayılan kişisel veri işleme şartlarına uygun olarak
güvenlik kamerası izleme faaliyetinde bulunmaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kamera ile İzleme
Faaliyetinin Duyurulması</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket tarafından KVK
Kanunu’nun 10. Maddesine uygun olarak, kişisel veri sahibi aydınlatılmaktadır.
Şirket, genel hususlara ilişkin olarak yaptığı aydınlatmanın kamera ile izleme
faaliyetine ilişkin birden fazla yöntem ile bildirimde bulunmaktadır.
Böylelikle, kişisel veri sahibinin temel hak ve özgürlüklerine zarar
verilmesinin engellenmesi, şeffaflığın ve kişisel veri sahibinin
aydınlatılmasının sağlanması amaçlanmaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket tarafından
kamera ile izleme faaliyetine yönelik olarak; Şirket internet sitesinde işbu
Politika yayımlanmakta (çevrimiçi politika düzenlemesi) ve izlemenin yapıldığı
alanların girişlerine izleme yapılacağına ilişkin bildirim yazısı asılmaktadır
(yerinde aydınlatma).</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kamera ile İzleme
Faaliyetinin Yürütülme Amacı ve Amaçla Sınırlılık</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket, KVK Kanunu’nun
4. maddesine uygun olarak, kişisel verileri işlendikleri amaçla bağlantılı,
sınırlı ve ölçülü bir biçimde işlemektedir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket tarafından video
kamera ile izleme faaliyetinin sürdürülmesindeki amaç bu Politika’da sayılan
amaçlarla sınırlıdır. Bu doğrultuda, güvenlik kameralarının izleme alanları,
sayısı ve ne zaman izleme yapılacağı, güvenlik amacına ulaşmak için yeterli ve
bu amaçla sınırlı olarak uygulamaya alınmaktadır. Kişinin mahremiyetini
güvenlik amaçlarını aşan şekilde müdahale sonucu doğurabilecek alanlarda
(örneğin, tuvaletler) izlemeye tabi tutulmamaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Elde Edilen Verilerin
Güvenliğinin Sağlanması</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket tarafından KVK
Kanunu’nun 12. maddesine uygun olarak, kamera ile izleme faaliyeti sonucunda
elde edilen kişisel verilerin güvenliğinin sağlanması için gerekli teknik ve
idari tedbirler alınmaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kamera ile İzleme
Faaliyeti ile Elde Edilen Kişisel Verilerin Muhafaza Süresi</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirketin, kamera ile
izleme faaliyeti ile elde edilen kişisel verileri muhafaza süresi ile ilgili
ayrıntılı bilgiye bu Politikanın Kişisel Verilerin Saklanma Süreleri isimli 6.4
maddesinde yer verilmiştir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">İzleme Sonucunda Elde
Edilen Bilgilere Kimlerin Erişebildiği ve Bu Bilgilerin Kimlere Aktarıldığı</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Canlı kamera
görüntüleri ile dijital ortamda kaydedilen ve muhafaza edilen kayıtlara
yalnızca sınırlı sayıda şirket çalışanının erişimi bulunmaktadır. Kayıtlara
erişimi olan sınırlı sayıda kişi gizlilik taahhütnamesi ile eriştiği verilerin
gizliliğini koruyacağını beyan etmektedir.</span></p>

<h2 style="text-align:justify;mso-collapsed-heading:yes"><b><span lang="TR" style="font-size:12.0pt;font-family:Roboto;color:#030349">9.2. ŞİRKETİN BİNA,
TESİS GİRİŞLERİNDE VE İÇERİSİNDE YÜRÜTÜLEN MİSAFİR GİRİŞ ÇIKIŞLARININ TAKİBİ</span></b><span lang="TR" style="font-size:12.0pt;font-family:Roboto;mso-bidi-font-family:&quot;Times New Roman&quot;;
color:#030349"></span></h2>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket tarafından;
güvenliğin sağlanması ve bu Politika’da belirtilen amaçlarla, şirket
binalarında ve tesislerinde misafir giriş çıkışlarının takibine yönelik kişisel
veri işleme faaliyetinde bulunulmaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Misafir olarak şirket
binalarına gelen kişilerin isim ve soyadları elde edilirken ya da şirket
nezdinde asılan ya da diğer şekillerde misafirlerin erişimine sunulan metinler
aracılığıyla söz konusu kişisel veri sahipleri bu kapsamda
aydınlatılmaktadırlar. Misafir giriş-çıkış takibi yapılması amacıyla elde
edilen veriler yalnızca bu amaçla işlenmekte ve ilgili kişisel veriler fiziki
ortamda veri kayıt sistemine kaydedilmektedir.</span></p>

<h2 style="text-align:justify;mso-collapsed-heading:yes"><b><span lang="TR" style="font-size:12.0pt;font-family:Roboto;color:#030349">9.3. ŞİRKETİN
MİSAFİRLERİNE SAĞLANAN İNTERNET ERİŞİMLERİNE İLİŞKİN KAYITLARIN SAKLANMASI VE
İNTERNET SİTESİ ZİYARETÇİLERİ</span></b><span lang="TR" style="font-size:12.0pt;
font-family:Roboto;mso-bidi-font-family:&quot;Times New Roman&quot;;color:#030349"></span></h2>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirketimiz tarafından
güvenliğin sağlanması ve bu Politika’da belirtilen amaçlarla; misafirlerin
tesislerimiz içerisinde kaldığı süre boyunca internet erişimlerine ilişkin log
kayıtları 5651 Sayılı Kanun ve bu Kanuna göre düzenlenmiş olan mevzuatın amir hükümlerine
göre kayıt altına alınabilmektedir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Bu çerçevede elde
edilen log kayıtlarına yalnızca sınırlı sayıda Şirketimiz çalışanlarının
erişimi bulunmaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Bu kayıtlar ancak
yetkili kamu kurum ve kuruluşları tarafından talep edilmesi veya Şirket içinde
gerçekleştirilecek denetim süreçlerinde ilgili hukuki yükümlülüğümüzü yerine
getirmek<a name="_bookmark20"></a>&nbsp;ve/veya hukuki haklarımızın korunması
ve Şirketimizin savunma haklarının tesisi amacıyla işlenmekte ve üçüncü
kişilerle paylaşılmaktadır</span></p>

<h2 style="text-align:justify;mso-collapsed-heading:yes"><b><span lang="TR" style="font-size:12.0pt;font-family:Roboto;color:#030349">9.4. ŞİRKETİN
İNTERNET SİTESİ ZİYARETÇİLERİ</span></b><span lang="TR" style="font-size:12.0pt;
font-family:Roboto;mso-bidi-font-family:&quot;Times New Roman&quot;;color:#030349"></span></h2>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket sahibi olduğu
internet sitelerinde; bu siteleri ziyaret eden kişilerin sitelerdeki
ziyaretlerini ziyaret amaçlarıyla uygun bir şekilde gerçekleştirmelerini temin
etmek; kendilerine özelleştirilmiş içerikler gösterebilmek ve çevrimiçi
reklamcılık faaliyetlerinde bulunabilmek maksadıyla teknik vasıtalarla (Örn.
cookie gibi) site içerisindeki internet hareketlerini kaydedilmektedir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket yapmış olduğu bu
faaliyetlere ilişkin kişisel verilerin korunması ve işlenmesine ilişkin detaylı
açıklamalar ilgili internet sitelerinin “Şirketin İnternet Sitesi Gizlilik
Politikası” metinleri içerisinde yer almaktadır.</span></p>

<h2 style="text-align:justify;mso-collapsed-heading:yes"><b><span lang="TR" style="font-size:12.0pt;font-family:Roboto;color:#030349">BÖLÜM 10: YÜRÜRLÜK VE
GÜNCELLENEBİLİK</span></b><span lang="TR" style="font-size:12.0pt;font-family:
Roboto;mso-bidi-font-family:&quot;Times New Roman&quot;;color:#030349"></span></h2>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket tarafından düzenlenerek
01.01.2024 tarihinde yürürlüğe girmiştir. Politika’nın tamamında veya bir
kısmında güncelleme yapılabilir. Politika, Şirketin internet sitesinde&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">(</span></strong><span lang="TR"><a href="https://talentosound.com.tr/"><span style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;">https://talentosound.com.tr/</span></a></span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">)&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">yayımlanır ve kişisel veri sahiplerinin talebi üzerine ilgili
kişilerin erişimine sunulur.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">EK-1: TANIMLAR</span></p>

<div align="center">

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0in 0in 0in 0in">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes">
  <td width="123" style="width:92.2pt;padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Özel Nitelikli</span></strong><span lang="TR" style="font-family:
  &quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Kişisel verilerin, başka verilerle eşleştirilerek dahi hiçbir
  surette kimliği</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:1">
  <td width="123" rowspan="2" style="width:92.2pt;padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Kişisel Veri</span></strong><span lang="TR" style="font-family:
  &quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">belirli veya belirlenebilir bir gerçek kişiyle
  ilişkilendirilemeyecek hâle</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:2">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">getirilmesini belirtir.</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:3">
  <td width="123" style="width:92.2pt;padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Kurum</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
  mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Kişisel Verileri Koruma Kurumunu ifade eder.</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:4">
  <td width="123" rowspan="2" style="width:92.2pt;padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Veri İşleyen</span></strong><span lang="TR" style="font-family:
  &quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Veri sorumlusunun verdiği yetkiye dayanarak onun adına kişisel
  verileri</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:5">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">işleyen gerçek veya tüzel kişiyi ifade eder.</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:6">
  <td width="123" rowspan="3" style="width:92.2pt;padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Veri Sorumlusu</span></strong><span lang="TR" style="font-family:
  &quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Kişisel verilerin işleme amaçlarını ve vasıtalarını
  belirleyen, veri kayıt</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:7">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">sisteminin kurulmasından ve yönetilmesinden sorumlu olan
  gerçek veya</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:8">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">tüzel kişiyi ifade eder.</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:9">
  <td width="123" rowspan="2" style="width:92.2pt;padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Açık Rıza</span></strong><span lang="TR" style="font-family:
  &quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Belirli bir konuya ilişkin, bilgilendirilmeye dayanan ve özgür
  iradeyle</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:10">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">açıklanan rızayı belirtir.</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:11">
  <td width="123" style="width:92.2pt;padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Kişisel verilerin, başka verilerle eşleştirilerek dahi hiçbir
  surette kimliği</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:12">
  <td width="123" style="width:92.2pt;padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">belirli veya belirlenebilir bir gerçek kişiyle
  ilişkilendirilemeyecek hâle</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:13">
  <td width="123" style="width:92.2pt;padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Anonim Hale</span></strong><span lang="TR" style="font-family:
  &quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">getirilmesini ifade eder.</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:14">
  <td width="123" style="width:92.2pt;padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Getirme</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
  mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR">
   
   
    
    
    
    
    
    
    
    
    
    
    
    
   
   
   
  </span><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349"></span></p>
  <br></td>
 </tr>
 <tr style="mso-yfti-irow:15">
  <td width="123" rowspan="5" style="width:92.2pt;padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">İş Ortağı</span></strong><span lang="TR" style="font-family:
  &quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Şirketin ticari ve her türlü organizasyonel faaliyetlerini
  yürütürken bizzat</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:16">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Ve ya topluluk şirketleri ile birlikte projeler yürütmek,
  hizmet almak gibi</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:17">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">amaçlarla iş ortaklığı kurduğu ve kişisel verilerin
  aktarıldığı firma ve</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:18">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">şirketleri ifade eder.</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:19">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:20">
  <td width="123" rowspan="3" style="width:92.2pt;padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Kişisel Veri</span></strong><span lang="TR" style="font-family:
  &quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Kimliği belirli veya belirlenebilir gerçek kişiye ilişkin her
  türlü bilgiyi</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:21">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">belirtir.</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:22;mso-yfti-lastrow:yes">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349"></span></p>
  <br></td>
 </tr>
</tbody></table>

</div>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">EK-2 : KISALTMALAR</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<div align="center">

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0in 0in 0in 0in">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes">
  <td rowspan="2" style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">KVKK</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
  mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">7 Nisan 2016 tarihli ve 29677 sayılı Resmi Gazete’de
  yayımlanan ,24 Mart 2016</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:1">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">tarihli ve 6698 sayılı Kişisel Verilerin Korunması Kanunu</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:2">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">(1) Bu Kanun ve ilgili diğer kanun hükümlerine uygun olarak
  işlenmiş olmasına</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:3">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">rağmen, işlenmesini gerektiren sebeplerin ortadan kalkması
  hâlinde kişisel veriler</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:4">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">KVKK</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
  mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">resen veya ilgili kişinin talebi üzerine veri sorumlusu
  tarafından silinir, yok edilir</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:5">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">madde 7</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
  mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">veya anonim hâle getirilir.</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:6">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">(2) Kişisel verilerin silinmesi, yok edilmesi veya anonim hâle
  getirilmesine ilişkin</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:7">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">diğer kanunlarda yer alan hükümler saklıdır.</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:8">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">(3) Kişisel verilerin silinmesine, yok edilmesine veya anonim
  hâle getirilmesine</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:9">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">ilişkin usul ve esaslar yönetmelikle düzenlenir.</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:10">
  <td rowspan="2" style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">TCK</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
  mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">12 Ekim 2004 tarihli ve 25611 sayılı Resmi Gazete’de
  yayımlanan;26 Eylül 2004</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:11">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">tarihli ve 5237 sayılı Türk Ceza Kanunu</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:12">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">- (1) Kanunların belirlediği sürelerin geçmiş olmasına karşın
  verileri sistem içinde</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:13">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">yok etmekle yükümlü olanlara görevlerini yerine
  getirmediklerinde bir yıldan iki</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:14">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">TCK madde</span></strong><span lang="TR" style="font-family:
  &quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">yıla kadar hapis cezası verilir.</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:15">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">138</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
  mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">(2) (Ek: 21/2/2014-6526/5 md.) Suçun konusunun Ceza Muhakemesi
  Kanunu</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:16">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">hükümlerine göre ortadan kaldırılması veya yok edilmesi
  gereken veri olması</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:17">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">hâlinde verilecek ceza bir kat artırılır.</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:18">
  <td rowspan="2" style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Yönetmelik</span></strong><span lang="TR" style="font-family:
  &quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">28 Ekim 2017 Cumartesi Resmi Gazate’de yayımlanan 30224 sayılı
  Kişisel Verilerin</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:19;mso-yfti-lastrow:yes">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Silinmesi ,Yok Edilmesi veya Anonim Hale Getirilmesi Hakkında
  Yönetmelik</span></p>
  </td>
 </tr>
</tbody></table>

</div>

<p class="MsoNormal"><span lang="TR">&nbsp;</span></p>',
               ],
               [
                    'user_id' => $superAdmin->user_id,
                    'title' => 'GİZLİLİK POLİTİKASI',
                    'slug' => Str::slug('GİZLİLİK POLİTİKASI'),
                    'content' => '<!--[if gte mso 9]><xml>
 <o:OfficeDocumentSettings>
  <o:RelyOnVML/>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:View>Normal</w:View>
  <w:Zoom>0</w:Zoom>
  <w:TrackMoves/>
  <w:TrackFormatting/>
  <w:PunctuationKerning/>
  <w:ValidateAgainstSchemas/>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:DoNotPromoteQF/>
  <w:LidThemeOther>TR</w:LidThemeOther>
  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
  <w:Compatibility>
   <w:BreakWrappedTables/>
   <w:SnapToGridInCell/>
   <w:WrapTextWithPunct/>
   <w:UseAsianBreakRules/>
   <w:DontGrowAutofit/>
   <w:SplitPgBreakAndParaMark/>
   <w:EnableOpenTypeKerning/>
   <w:DontFlipMirrorIndents/>
   <w:OverrideTableStyleHps/>
  </w:Compatibility>
  <m:mathPr>
   <m:mathFont m:val="Cambria Math"/>
   <m:brkBin m:val="before"/>
   <m:brkBinSub m:val="&#45;-"/>
   <m:smallFrac m:val="off"/>
   <m:dispDef/>
   <m:lMargin m:val="0"/>
   <m:rMargin m:val="0"/>
   <m:defJc m:val="centerGroup"/>
   <m:wrapIndent m:val="1440"/>
   <m:intLim m:val="subSup"/>
   <m:naryLim m:val="undOvr"/>
  </m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
  DefSemiHidden="false" DefQFormat="false" DefPriority="99"
  LatentStyleCount="376">
  <w:LsdException Locked="false" Priority="0" QFormat="true" Name="Normal"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 1"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 2"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 3"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 9"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 1"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 2"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 3"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 4"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 5"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 6"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 7"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 8"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="header"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footer"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index heading"/>
  <w:LsdException Locked="false" Priority="35" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="caption"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of figures"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope return"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="line number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="page number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of authorities"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="macro"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toa heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 5"/>
  <w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Closing"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Signature"/>
  <w:LsdException Locked="false" Priority="1" SemiHidden="true"
   UnhideWhenUsed="true" Name="Default Paragraph Font"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Message Header"/>
  <w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Salutation"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Date"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Note Heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Block Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Hyperlink"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="FollowedHyperlink"/>
  <w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>
  <w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Document Map"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Plain Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="E-mail Signature"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Top of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Bottom of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal (Web)"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Acronym"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Cite"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Code"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Definition"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Keyboard"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Preformatted"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Sample"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Typewriter"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Variable"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Table"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation subject"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="No List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Contemporary"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Elegant"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Professional"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Balloon Text"/>
  <w:LsdException Locked="false" Priority="39" Name="Table Grid"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Theme"/>
  <w:LsdException Locked="false" SemiHidden="true" Name="Placeholder Text"/>
  <w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>
  <w:LsdException Locked="false" SemiHidden="true" Name="Revision"/>
  <w:LsdException Locked="false" Priority="34" QFormat="true"
   Name="List Paragraph"/>
  <w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
  <w:LsdException Locked="false" Priority="30" QFormat="true"
   Name="Intense Quote"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="19" QFormat="true"
   Name="Subtle Emphasis"/>
  <w:LsdException Locked="false" Priority="21" QFormat="true"
   Name="Intense Emphasis"/>
  <w:LsdException Locked="false" Priority="31" QFormat="true"
   Name="Subtle Reference"/>
  <w:LsdException Locked="false" Priority="32" QFormat="true"
   Name="Intense Reference"/>
  <w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
  <w:LsdException Locked="false" Priority="37" SemiHidden="true"
   UnhideWhenUsed="true" Name="Bibliography"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
  <w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
  <w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
  <w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
  <w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
  <w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
  <w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
  <w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Mention"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Smart Hyperlink"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Hashtag"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Unresolved Mention"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Smart Link"/>
 </w:LatentStyles>
</xml><![endif]--><!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Table Normal";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-parent:"";
	mso-padding-alt:0in 5.4pt 0in 5.4pt;
	mso-para-margin:0in;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-ansi-language:TR;}
</style>
<![endif]-->

<h2 style="margin-top:0in;text-align:justify;mso-collapsed-heading:yes"><strong><span lang="TR" style="font-size:12.0pt;font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:
&quot;Times New Roman&quot;;mso-bidi-theme-font:major-bidi;color:#030349">Talento Sound
Eğitim ve Danışmanlık Hizmetleri Ticaret Limited Şirketi </span></strong><span lang="TR" style="font-size:12.0pt;font-family:Roboto;color:#030349"></span></h2>

<h2 style="margin-top:0in;text-align:justify;mso-collapsed-heading:yes"><strong><span lang="TR" style="font-size:12.0pt;font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:
&quot;Times New Roman&quot;;mso-bidi-theme-font:major-bidi;color:#030349">GİZLİLİK
POLİTİKASI</span></strong></h2><div><h2 style="margin-top:0in;text-align:justify;mso-collapsed-heading:yes"><strong><span lang="TR" style="font-size:12.0pt;font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:
&quot;Times New Roman&quot;;mso-bidi-theme-font:major-bidi;color:#030349">Son Güncellenme Tarihi: 01.01.2014</span></strong></h2></div><p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;">www.talentosound.online<span class="MsoHyperlink"><span style="color:#007BFF"> </span></span></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">alan adı web
sitesinin (kısaca “</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Site</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">” olarak
anılacaktır) ve “Talento Sound” markası tüm hakları sadece ve yalnızca&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">Talento Sound Eğitim ve Danışmanlık Hizmetleri Ticaret Limited Şirketi</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">’ne (kısaca “</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">Şirket</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">&nbsp;veya&nbsp;</span><strong><span lang="TR" style="font-family:
&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Talento Sound</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">” olarak
anılacaktır) aittir. Talento Sound olarak bu politikayı hazırlamamızdaki amaç
sizlerin sitemizi, ürün ve/veya hizmetlerimizi kullanırken güvenli ve eksiksiz
bir şekilde hizmet almanızı sağlamaktır. Talento Sound, üyeleri, iş ortakları
tarafından Site üzerinden elektronik ortamda veya sair şekillerde kendisine
iletilen kişisel bilgileri, yaptığı sözleşmeler ile belirlenen amaçlar ve
kapsam dışında üçüncü kişilerle paylaşmaz. Bu politika kapsamında üyelerimizin
kişisel verileri tamamen 6698 sayılı Kişisel Verilerin Korunması Kanunu (“</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">Kanun</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">”) ile uyumlu bir şekilde işlenmektedir. Çerez politikamız ve
Aydınlatma Metnimiz işbu Gizlilik Politikası’nın ayrılmaz bir parçasıdır. Çerez
politikası için&nbsp;</span><span lang="TR"><a href="https://kidolog.com/"><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF;
background:yellow;mso-highlight:yellow">talentosound.</span></a></span><span class="MsoHyperlink"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:
&quot;Segoe UI&quot;;color:#007BFF;background:yellow;mso-highlight:yellow">com.tr</span></span><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
background:yellow;mso-highlight:yellow"> /çerezpolitikası</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349;background:yellow;
mso-highlight:yellow">&nbsp;,</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"> Aydınlatma Metni için ise&nbsp;</span><span lang="TR"><a href="http://www.talentosound.online/sozlesmeler/aydinlatma-metni"><span style="mso-field-code:&quot;HYPERLINK \0022https\:\/\/kidolog\.com\/\0022&quot;"><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">talentosound.</span></span><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">com.tr</span><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;background:
yellow;mso-highlight:yellow">/sozlesmeler/aydinlatma-metni</span></a></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;adreslerine
göz atabilirsiniz. Bizler sizin için buradayız!</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Verilerinizin güvende
olduğundan emin olmak adına sadece sizler için hazırlanan lütfen bu Politika’yı
sonuna kadar okuyunuz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Bu Gizlilik Politikası
şunları tanımlar:</span></p>

<ul style="margin-top:0in" type="disc"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l0 level1 lfo1;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Sizin hakkınızda kişisel verilerinizi
     neden topladığımızı,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l0 level1 lfo1;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Hangi kişisel verilerinizi işlediğimizi,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l0 level1 lfo1;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel verilerinizi kimlerin
     görebileceğini,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l0 level1 lfo1;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel verileriniz ile ilgili sahip
     olduğunuz hak ve seçenekleri,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l0 level1 lfo1;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel verilerinizi nasıl koruduğumuzu</span></li></ul>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Gizlilik Politikası
burada toplu olarak Hizmet ve/veya Ürün olarak adlandırdığımız Şirket’in Aracı
Hizmet Sağlayıcı sıfatı ile sizlere sunmuş olduğu Ürün ve/veya Hizmet’i;
Şirket’in Ürün ve/veya Hizmetleri’ni; Danışmanlar ile gerçekleştirdiğiniz Ürün
ve/veya Hizmetler için geçerlidir.&nbsp;</span><span lang="TR"><a href="https://kidolog.com/"><span style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">talentosound.</span></a></span><span class="MsoHyperlink"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:
&quot;Segoe UI&quot;;color:#007BFF">com.tr</span></span><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;adresine yeni bir versiyon
göndererek bu Gizlilik Politikası’nı periyodik olarak güncelleyebiliriz.
Herhangi bir somut değişiklik yaparsak, değişikliğin yürürlüğe girmesinden önce
Hizmet\'e bir bildirim göndererek veya paylaştığınız ve kabul ettiğiniz bildirim
yöntemleri ile sizi bilgilendireceğiz. Önemli değişiklikler yapacak olursak
sizi, değişiklikler yürürlüğe girmeden önce Hizmet’te bir bildirim yayınlayarak
yürürlükteki yasaların gerektirdiği şekilde bilgilendireceğiz. Hizmet’i
yürürlük tarihinin ardından kullanmaya devam ettiğinizde, yeni Gizlilik
Politikası geçerli olacaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Bize
Ulaşın</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Veri korumayla ilgili
sorularınız varsa veya kişisel verileriniz ile ilgili sorunların çözülmesi için
talepte bulunacaksanız, öncelikle bizimle Whatsapp Destek Hattından veya Bize
Ulaşın bölümünde bulunan İletişim Formu üzerinden iletişim kurmanızı tavsiye
ederiz, böylece size daha hızlı yanıt verebiliriz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Her türlü sorunuz için
haftanın 7 günü 09:00 – 23:59 mesai saatleri içerisinde;</span></p>

<ul style="margin-top:0in" type="disc"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l3 level1 lfo2;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">E-posta&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     : iletisim@talentosound.com</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l3 level1 lfo2;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Telefon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     : +90(216) 358 22 25 </span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l3 level1 lfo2;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">WhatsApp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
     +90(552) 320 94 27 </span></li></ul>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Talento
Sound Kimdir?</span></strong></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Bireyler
evlilik yoluna giderek aile kurumunu oluştururken aile kurmanın en güzel
hediyesi de çocuk sahibi olmaktır. Birey aileyi, aile ise toplumu oluşturur.
Toplumun en temel taşı olan çocukların ruh sağlığı toplumun ruh sağlığını
belirler misyonuyla çıktığımız yolda her bir psikolojik sağlamlığı olan çocuk
gelecek toplumu şekillendirecektir.<span style="mso-spacerun:yes">&nbsp;
</span>Talento Sound; dikkat eksikliği ve hiperaktivite bozukluğu, öğrenme
güçlükleri, otizm, dil ve konuşma problemleri gibi bir çocuğun gelişiminde
yaşayabileceği bütün problemlerle her çocuğa nöropsikolojik ilkeler uyarınca
oluşturulan dinletilerden ve terapilerden oluşmaktadır. Dinletilerin frekans
aralıkları her çocuğun ihtiyacına yönelik olarak yazılımsal ortamda
ayarlanmaktadır. </span></strong><span lang="TR"><a href="https://kidolog.com/"><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">talentosound.</span></a></span><span class="MsoHyperlink"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:
&quot;Segoe UI&quot;;color:#007BFF">com.tr</span></span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">
Dünya’da nerede olursanız olun online nöropsikolojik müzik terapi hizmetini
güvenli bir şekilde alabileceğiniz bir platformdur. </span></strong><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349;font-weight:normal"></span></strong></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">TalentoSound,
iki psikolog kurucu ortağın tasarlamış olduğu özgün bir sistemdir. Uzman Klinik
Psikolog Ebubekir Yasir Öztürk ve Uzman Psikolog Ahmet Beyhan Eşkiler ‘in kendi
terapi seanslarını yürütürken fark ettikleri eksiklikler üzerine kurulmuştur.
Talento Sound ekosistemi, özellikle psikoloji alanının suistimal edildiği bu
günlerde kurucusundan içindeki uzmanlara kadar ruh sağlığı alanında hizmet
verenlerden oluşmaktadır. Bu şekilde tamamen güvenli bir ortamda ve profesyonel
ruh sağlığı uzmanlarıyla sorunlarınıza çözüm olabilmek için tasarlanan </span></strong><span lang="TR"><a href="https://kidolog.com/"><span style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">talentosound.</span></a></span><span class="MsoHyperlink"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:
&quot;Segoe UI&quot;;color:#007BFF">com.tr</span></span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">
binden fazla aileye hizmet vermiş ve vermeye devam etmektedir. </span></strong><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349;font-weight:normal"></span></strong></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Gizliliğinize
Neden Bu kadar Önem Veriyoruz?</span></strong><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<h2 style="margin-top:0in;text-align:justify;mso-collapsed-heading:yes"><strong><span lang="TR" style="font-size:12.0pt;font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:
&quot;Times New Roman&quot;;mso-bidi-theme-font:major-bidi;color:#030349">Talento Sound
Eğitim ve Danışmanlık Hizmetleri Ticaret Limited Şirketi </span></strong><span lang="TR" style="font-size:12.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">olarak,
Türk mevzuatı başta olmak üzere, hukuka ve kanunlarına bağlı, bilhassa
kullanıcılarımızı ve iş birliği yaptığımız ortaklarımıza karşın hassas davranış
sergilemeye yönelik, hukukun üstünlüğüne inanan kurumsal yapıdır. Bu
doğrultuda, özellikle kullanıcılarımızın ve iş birliği yaptığımız
ortaklarımızla olan hukuki ilişkilerimizde, Danışmanlar ile gerçekleştirdiğiniz
görüşmelerde, Şirket tarafından sağlanan Aracı Hizmet Sağlayıcılığı
faaliyetinde gizliliğe özen göstermekteyiz.</span><span lang="TR" style="font-size:12.0pt;font-family:Roboto;color:#030349"></span></h2>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Bu gizlilik politikası,
Şirket Aracı Hizmet Sağlayıcısı sıfatı ile gerçekleştirdiği Ürün ve/veya
Hizmetler’de; Şirket’in Ürün ve/veya Hizmetleri’ni; Danışmanlar ile
gerçekleştirdiğiniz Ürün ve/veya Hizmetler’de (“</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Ürün
ve/veya Hizmetler</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">”) Kişisel Verilerinizi nasıl toplayıp işlediğimizi, iş birliği
yaptığımız ortaklar ve kullanıcılarımızla aramızdaki hukuki ilişkide mevcut
gizliliğe ilişkin hususları açıklamaktadır. Ürün ve/veya Hizmetler, veri
toplayabilecek, depolayabilecek ve/veya işleyebilecek şekilde tasarlanmıştır. Talento
Sound, çeşitli yazılım bileşenlerinden oluşmaktadır. Ürün ve/veya
Hizmetlerimiz, dünya çapındaki çeşitli ülkelerde bulunan kaynaklar ve sunucular
kullanılarak sağlanacak ve bunu yaparken cihazınızdaki yazılım ve bilgilerinize
erişilebilecektir. Ürün ve/veya Hizmetlerimiz, kendi gizlilik politikalarına
sahip başka şirketlerin web sitelerine ve hizmetlerine erişebilir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Talento Sound, başka
şirketlerin gizlilik uygulamalarından sorumlu değildir, dolayısıyla söz konusu
şirketlerin gizlilik politikalarını okumanızı öneririz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Belirli kişisel veri
kategorilerini Talento Sound’a sağlamamayı tercih edebilirsiniz. Ancak, bu tür
verileri Talento Sound’a sağlamamayı seçerseniz, hizmetlerimizin
güncellemelerini ya da tüm işlevlerini size sağlayamayabiliriz veya
sorularınıza yanıt veremeyebiliriz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Kişisel
Verilerinizi Neden Topluyoruz?</span></strong><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Toplanan kişisel
verileriniz, Kanun tarafından öngörülen temel ilkelere uygun olarak ve Kanun’un
5. ve 6. maddelerinde belirtilen kişisel veri işleme şartları ve amaçları
dahilinde, Şirket tarafından aşağıda yer alan amaçlar doğrultusunda
işlenebilecektir:</span></p>

<ul style="margin-top:0in" type="disc"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo3;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Şirketimiz tarafından sunulan mal ve
     hizmetleri tanıtmak, üyeleri tanımak ve iletişimi arttırmak, imajı
     arttırmak, ürün, hizmet ve iletişimini geliştirmek, müşterilere özel
     promosyon /tanıtım /kampanya ve duyurular hazırlanması ve gönderilmesi,
     ürün ve hizmetlerin kullanımına ve/veya ödeme koşullarına ilişkin olarak
     yapılacak değişiklerin bildirilmesi, müşteri anketi, müşteri memnuniyeti
     uygulamaları ve bilgilendirmeleri yapabilmek, denetim, veri analizi,
     araştırma, istatistiksel çalışma, trendleri anlama, pazarlama ve reklam
     hizmetlerinde
     kullanmak,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo3;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Şirket tarafından yürütülen ticari
     faaliyetlerin gerçekleştirilmesi için ilgili iş birimlerimiz tarafından
     gerekli çalışmaların yapılması ve buna bağlı iş süreçlerinin yürütülmesi,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo3;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Şirket’in ticari ve/veya iş
     stratejilerinin planlanması ve icrası,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo3;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Şirket’ in ve Şirket’le iş ilişkisi
     içerisinde olan ilgili kişilerin hukuki, teknik ve ticari-iş güvenliğinin
     temini,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo3;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">İlgili mevzuat hükümleri gereği
     akdettiğimiz sözleşmeler uyarınca üstlenilen yükümlülükleri ifa etmek,
     yasal yükümlülüğü yerine getirebilmek ve yürürlükteki mevzuattan doğan
     haklarımızı kullanabilmek,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo3;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Kamu güvenliğine ilişkin hususlarda talep
     halinde ve mevzuat gereği kamu görevlilerine bilgi verebilmek,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo3;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Doğabilecek uyuşmazlıklarda delil olarak
     kullanılmak,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo3;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Şirketimiz tarafından sunulan mal ve
     hizmetleri tanıtmak, üyeleri tanımak ve iletişimi arttırmak, imajı
     arttırmak, ürün, hizmet ve iletişimini geliştirmek, müşterilere özel
     promosyon /tanıtım /kampanya ve duyurular hazırlanması ve gönderilmesi,
     ürün ve hizmetlerin kullanımına ve/veya ödeme koşullarına ilişkin olarak
     yapılacak değişiklerin bildirilmesi, müşteri anketi, müşteri memnuniyeti
     uygulamaları ve bilgilendirmeleri yapabilmek, denetim, veri analizi,
     araştırma, istatistiksel çalışma, trendleri anlama, pazarlama ve reklam
     hizmetlerinde
     kullanmak,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo3;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Şirket tarafından yürütülen ticari
     faaliyetlerin gerçekleştirilmesi için ilgili iş birimlerimiz tarafından
     gerekli çalışmaların yapılması ve buna bağlı iş süreçlerinin yürütülmesi,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo3;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Şirket’in ticari ve/veya iş
     stratejilerinin planlanması ve icrası,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo3;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Şirket’ in ve Şirket’le iş ilişkisi
     içerisinde olan ilgili kişilerin hukuki, teknik ve ticari-iş güvenliğinin
     temini,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo3;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">İlgili mevzuat hükümleri gereği
     akdettiğimiz sözleşmeler uyarınca üstlenilen yükümlülükleri ifa etmek,
     yasal yükümlülüğü yerine getirebilmek ve yürürlükteki mevzuattan doğan
     haklarımızı kullanabilmek,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo3;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Kamu güvenliğine ilişkin hususlarda talep
     halinde ve mevzuat gereği kamu görevlilerine bilgi verebilmek,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo3;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Doğabilecek uyuşmazlıklarda delil olarak
     kullanılmak.</span></li></ul>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Ayrıca, sizlere daha
iyi bir Ürün ve/veya Hizmet deneyimi sunabilmek ve Ürün ve/veya Hizmetlerimizin
işlemesini sağlamak için verilerinizi farklı işletme amaçlarıyla da
kullanıyoruz. Aramızdaki Üyelik ilişkisini sağlıklı bir şekilde uygulamak
amacıyla ve aşağıdakiler için gerekli verileri işliyoruz:</span></p>

<ul style="margin-top:0in" type="disc"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l4 level1 lfo4;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Hesaplar oluşturmak ve Danışmanlarımız
     ile gerçekleştireceğiniz görüşmeler için ödeme yapmanızı ve Ürün ve/veya
     Hizmetlerimizden faydalanmanızı sağlamak</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l4 level1 lfo4;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Hizmeti Yönetmek</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l4 level1 lfo4;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Ödemeleri doğrulamak ve onaylamak</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l4 level1 lfo4;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Talep ettiğiniz Ürün ve/veya Hizmetler’i
     sağlamak ve sunmak</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l4 level1 lfo4;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Size Hizmet ile bağlantılı bildirimler
     göndermek</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l4 level1 lfo4;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Ürün ve/veya Hizmeti Talento Sound
     tarafından Ürün ve/veya Hizmetleri edinen bilinçli ebeveynlere/Ürün
     ve/veya Hizmetlerden faydalananlara daha uygun hale getirmek için.</span></li></ul>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Bunun yanında, siz
değerli </span><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:
&quot;Segoe UI&quot;;color:#212529">ebeveynlere</span><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349"> harika bir Ürün ve/veya Hizmet sunmak
amacıyla aşağıdakiler için gerekli verileri toplamak ve işlemek meşru
menfaatimizedir:</span></p>

<ul style="margin-top:0in" type="disc"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l6 level1 lfo5;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Ebeveynlere profillerini güncellemek ve
     geliştirmek</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l6 level1 lfo5;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Danışman profillerini güncellemek ve
     geliştirmek</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l6 level1 lfo5;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Ürün ve/veya Hizmet deneyimini
     geliştirmek ve iyileştirmek</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l6 level1 lfo5;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Sizinle ilişkilerimizi yönetmek</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l6 level1 lfo5;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Ürün ve/veya Hizmet’in bir parçası olarak
     sosyal özellikler sunmak</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l6 level1 lfo5;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Ürün ve/veya Hizmet deneyiminizi
     özelleştirmek</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l6 level1 lfo5;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Yorum ve sorularınıza yanıt vermek ve
     destek hizmeti sağlamak</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l6 level1 lfo5;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Size Ürün ve/veya Hizmet yanı sıra diğer Talento
     Sound E-bülten ve hizmetlerde Talento Sound olarak teklifleri sunmak</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l6 level1 lfo5;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Size güncellemeler, güvenlik uyarıları ve
     destek mesajları gibi ilgili bilgileri göndermek</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l6 level1 lfo5;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Diğer Danışmanlar ile iletişim kurmanızı
     sağlamak</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l6 level1 lfo5;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Kişiselleştirilmiş reklamlar göstermek
     için.</span></li></ul>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Size Ürün ve/veya
Hizmetlerimizin yanı sıra başka yerlerde (e-posta da dahil) kişiselleştirilmiş
reklamlar göstermek amacıyla aşağıdakiler için gerekli verileri işlemek meşru
menfaatimizdendir:</span></p>

<ul style="margin-top:0in" type="disc"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l2 level1 lfo6;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Hizmet ve çevrimiçi davranışlarınızla
     bağlantılı olarak eriştiğiniz içeriği izlemek</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l2 level1 lfo6;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Reklamlarımızı ve Ürün ve/veya Hizmeti
     sunmak, amaçlamak ve iyileştirmek için</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l2 level1 lfo6;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Hizmetin güvenli ve adil kalmasını
     sağlamak için</span></li></ul>

<p style="text-align:justify;line-height:21.0pt"><em><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Kişiselleştirilmiş
reklamları almamayı nasıl seçeceğiniz hakkında bilgi edinmek için aşağıdaki
"Haklarınız ve Seçenekleriniz" bölümüne bakın.</span></em><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Ürün ve/veya Hizmet
sırasında, tüm </span><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#212529">ebeveynler </span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">arasında eşit şartlar
oluşturmak bizim için birinci önceliktir. Kabul edilebilir Kullanım Koşulları
hakkında daha fazla bilgi için,&nbsp;</span><span lang="TR"><a href="https://talentosound.com/sozlesmeler/mesafeli-satis-sozlesmesi"><span style="mso-field-code:&quot;HYPERLINK \0022https\:\/\/kidolog\.com\/\0022&quot;"><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">talentosound.</span></span><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">com.tr</span><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;background:
yellow;mso-highlight:yellow"> /sozlesmeler/mesafeli-satis-sozlesmesi</span></a></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;uzantısında
bulunan Talento Sound Mesafeli Satış Sözleşmesi\'ne bir göz atın.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Hizmetin ve sosyal
özelliklerinin güvenli ve adil kalmasını sağlamak, dolandırıcılıkla mücadele
etmek ve diğer yollarla kabul edilebilir kullanımı sağlamak amacıyla
aşağıdakiler için gerekli verileri işlemek meşru menfaatimizedir:</span></p>

<ul style="margin-top:0in" type="disc"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l5 level1 lfo7;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Ürün ve/veya Hizmet’in ve sosyal
     özelliklerinin kullanımını analiz etmek ve izlemek</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l5 level1 lfo7;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Otomatik veya manuel olarak konuşmaları
     makul hale getirmek</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l5 level1 lfo7;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Dolandırıcılık yapan veya uygunsuz
     davranan üyelere karşı gerekli adımları atmak</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l5 level1 lfo7;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Analiz etmek, profil oluşturmak ve
     kategorize etmek için.</span></li></ul>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Yukarıdaki durumların
tümünde, toplanan verileri analiz edebilir, profil oluşturmak için kullanabilir
ve kategorize edebiliriz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Eğer onay verirseniz,
onayınız ile verilerinizi başka amaçlar için de işleyebiliriz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Hangi
Verilerinizi İşliyoruz?</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Öncelikle belirtmek
isteriz ki tüm derdimiz sizleri daha iyi tanımak ve bunun için doğru bir profil
çıkarmaktır. Talento Sound olarak gerektiğinde sizlerin IP adreslerinizi tespit
etmekte ve bunu kullanmakta olduğumuzu bildirmek isteriz. IP adresleriniz,
sizleri genel bir şekilde tanımlamak ve kapsamlı demografik bilgi toplamak
amacıyla da kullanılabilmektedir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Üyelik veya Site
üzerindeki çeşitli formların doldurulması ve oylamaların yapılması suretiyle
kullanıcıların kendileriyle ilgili bir takım kişisel bilgileri (ad-soyadı,
telefon, adres veya e-posta adresleri gibi) Şirket’e vermeleri gerekmektedir.
Bu kapsamda başlıca işlenen verileriniz;</span></p>

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0in 0in 0in 0in">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><em><b><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Veri Türleri</span></b></em><span lang="TR" style="font-family:
  &quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><em><b><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Örnekleri</span></b></em><span lang="TR" style="font-family:
  &quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:1">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Kimlik Bilgileri</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Ad-Soyad…</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:2">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Ebeveyn Bilgileri</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Adı veya etiketi, şifresi</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:3">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Profil Bilgileri</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Profil fotoğrafı vb. kişiselleştirmeler</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:4">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">İletişim Bilgileri</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Telefon-Adres…</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:5">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Finansal Bilgi</span></strong><span lang="TR" style="font-family:
  &quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Kredi Kartı Bilgileri</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:6">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Kullanıcı Bilgisi</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">…</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:7">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Konum Bilgileri</span></strong><span lang="TR" style="font-family:
  &quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">IP Adresi…</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:8">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Davranış/ Profil Bilgileri</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Ürün yorumları, sosyal medya bağlantılarımız, çerez bilgileri.</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:9;mso-yfti-lastrow:yes">
  <td style="padding:0in 0in 0in 0in">
  <p class="MsoNormal" style="text-align:justify"><span lang="TR" style="font-family:
  &quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#212529">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
 </tr>
</tbody></table>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel Verilerin
Korunması Kanunu’nun 7. maddesi gereğince, geri döndürülemeyecek şekilde anonim
hale getirilen veriler, anılan kanun hükümleri uyarınca kişisel veri olarak
kabul edilmeyecek ve bu verilere ilişkin işleme faaliyetleri işbu Politika
hükümleri ile bağlı olmaksızın gerçekleştirecektir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Bize vermeyi tercih
ettiğiniz diğer veriler;</span></p>

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0in 0in 0in 0in">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><em><b><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Veri Türleri</span></b></em><span lang="TR" style="font-family:
  &quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><em><b><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Örnekleri</span></b></em><span lang="TR" style="font-family:
  &quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:1">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Ödeme hizmeti sağlayıcılarımız</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Tüm ödeme işlemleriyle bağlantılı olarak ödeme bilgilerinizi
  toplar.</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:2;mso-yfti-lastrow:yes">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
 </tr>
</tbody></table>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Otomatik olarak
topladığımız veriler;</span></p>

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0in 0in 0in 0in">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><em><b><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Veri Türleri</span></b></em><span lang="TR" style="font-family:
  &quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><em><b><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Örnekleri</span></b></em><span lang="TR" style="font-family:
  &quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:1">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Üyelik bilgileriniz</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Adı veya etiketi, şifresi,</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:2">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">IP adresiniz ve mobil cihaz tanımlayıcıları</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Cihazınız veya reklam ID\'niz</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:3">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Cihazınız hakkındaki veriler</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Cihaz adı ve işletim sistemi, tarayıcı türü ve dil, internet
  hizmet sağlayıcısı ve telefon operatörü</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:4">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Çerezlerle ve benzer teknolojilerle topladığımız veriler</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Ne kadar süredir Site’de bulunduğunuz, Site’nin hangi
  sayfalarına ziyaret ettiğiniz</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:5">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Yaklaşık konum verisi,</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:6">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Ürün ve/veya Hizmet’e ilişkin bilgiler</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Aldığınız seans sayısı, tercih ettiğiniz Danışman bilgileri,
  satın alınan Ürün ve/veya Hizmet bilgileri</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:7;mso-yfti-lastrow:yes">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
 </tr>
</tbody></table>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">İş ortaklarımız
aracılığıyla topladığımız veriler;</span></p>

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0in 0in 0in 0in">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><em><b><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Veri Türleri</span></b></em><span lang="TR" style="font-family:
  &quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><em><b><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Örnekleri</span></b></em><span lang="TR" style="font-family:
  &quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:1">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Demografik veriler</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">IP adresinizin hassas olmayan konumunu belirlemek için</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:2">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Dolandırıcılığa karşı veriler</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:3">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Ödeme hizmet sağlayıcılarından gelen veriler</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Ödeme doğrulama verileri</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:4">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Size daha iyi hizmet sağlayabilmemiz için reklam veya analiz
  amaçlı veriler</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
  mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Anketler</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:5">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Yaklaşık konum verisi,</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:6">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Ürün ve/veya Hizmet’e ilişkin bilgiler</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Aldığınız seans sayısı, tercih ettiğiniz Danışman bilgileri,
  satın alınan Ürün ve/veya Hizmet bilgileri</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:7;mso-yfti-lastrow:yes">
  <td style="padding:0in 0in 0in 0in">
  <p class="MsoNormal" style="text-align:justify"><span lang="TR" style="font-family:
  &quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#212529">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
 </tr>
</tbody></table>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Yukarıda belirtilen
hukuki sebeplerle toplanan kişisel veriler 6698 sayılı Kanun’un 5. Maddesinde
ve bu Gizlilik Politikası’nda belirtilen amaçlarla işlenebilmekte ve
aktarılabilmektedir. Bu amaçların dışında herhangi bir nedenle verilerinizi
işlememizin ve aktarmamızın mümkün olmadığını tekrar belirtmek isteriz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Kişisel
Verilerinizi Aktarıyor Muyuz?</span></strong><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Talento Sound
tarafından talep edilen bilgiler ve/veya kullanıcı tarafından sağlanan bilgiler
ve/veya Site üzerinden yapılan işlemlerle ilgili bilgiler; Talento Sound ve iş
birliği içinde olduğu kişiler tarafından, Danışmanlar da dahil olmak üzere, Talento
Sound üyeleri ve kullanıcıları ile yaptığı sözleşmeler ile belirlenen amaçlar
ve kapsam dışında da üyelerin ve kullanıcının kimliği ifşa edilmeden çeşitli
istatistiksel değerlendirmeler, veri tabanı oluşturma ve pazar araştırmalarında
kullanılabilir. online@talentosound.com’dan gönderilen e-postaların tarafınıza
gönderilmesini istemiyor iseniz online@talentosound.com adresine e-posta
göndererek e-posta gönderim listesinden kolayca çıkabilirsiniz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Talento Sound, Site
dahilinde başka sitelere link verebilir. Talento Sound, link vasıtasıyla
erişilen sitelerin gizlilik uygulamaları ve içeriklerine yönelik herhangi bir
sorumluluk taşımamaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel veriler,
Kanun’un 8. ve 9. maddelerinde belirtilen kişisel veri işleme şartları ve
amaçları çerçevesinde Talento Sound yetkilileri, hissedarlarımız, iş
ortaklarımız, tedarikçilerimiz, kanunen yetkili kamu kurum ve kuruluşları ile
kanunen yetkili özel kurumlar ile paylaşılabilecek, bu amaçlarla sınırlı olarak
Kanun m.9’da işaret edilen usul esaslar ile Kişisel Verileri Koruma Kurulu
kararları çerçevesinde yurt dışına aktarılabilecektir. Talento Sound, işbu
Gizlilik Politikası’nda aksi belirtilmedikçe kişisel ilgilerden herhangi birini
Talento Sound iş birliği içinde olmadığı şirketlere ve üçüncü kişilere
açıklamayacaktır. Aşağıda belirtilen sınırlı durumlarda Talento Sound, işbu
“Gizlilik Politikası” hükümleri dışında kullanıcılara ait bilgileri üçüncü
kişilere açıklayabilir. Bu durumları tahdidi olarak saymak gerekirse, şöyledir;</span></p>

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0in 0in 0in 0in">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><em><b><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">A. Yetkili hukuki otoriteler tarafından çıkarılan ve
  yürürlükte olan Kanun, Kanun Hükmünde Kararname, Yönetmelik vb. gibi hukuk
  kurallarının getirdiği zorunluluklara uyulmasının;</span></b></em><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349"></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:1">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><em><b><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">B. Talento Sound üyeleri ve kullanıcıları ile yaptığı
  sözleşmelerin gereklerinin yerine getirilmesi ve bunların uygulamaya
  konulmasının;</span></b></em><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
  mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:2">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><em><b><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">C. Yetkili idari ve adli otorite tarafından usulüne göre
  yürütülen bir araştırma veya soruşturmanın yürütümü amacıyla kullanıcılarla
  ilgili bilgi talep edilmesinin ve</span></b></em><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349"></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:3;mso-yfti-lastrow:yes">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><em><b><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">D. Kullanıcıların hakları veya güvenliklerini korumak için
  bilgi verilmesinin gerekli olduğu hallerdir.</span></b></em><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349"></span></p>
  </td>
 </tr>
</tbody></table>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Verilerinizin
Aktarıldığı Yerler:</span></p>

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0in 0in 0in 0in">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Şirket/Kurum</span></strong><span lang="TR" style="font-family:
  &quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Aldığımız Hizmet/Sebebimiz</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349"></span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:1">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Param Bir TURK Elektronik Para A.Ş.<span style="mso-spacerun:yes">&nbsp; </span></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349"><span style="mso-spacerun:yes">&nbsp;</span>Aracı ödeme kuruluşu</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:2">
  <td style="padding:0in 0in 0in 0in"><br></td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Kullanıcı hareketleri analizi</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:3">
  <td style="padding:0in 0in 0in 0in"><br></td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Çerez onaylarının ve retlerinin alınması</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:4">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:5">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:6;mso-yfti-lastrow:yes">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
 </tr>
</tbody></table>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Kişisel
Verilerinize Kimler Erişebilir?</span></strong><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel verileriniz
yurt dışına aktarılmamaktadır. Ancak aşağıdaki durumlarda verilerinize, Talento
Sound dışında diğer taraflarca erişilebilir:</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Diğer kullanıcılar;</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Sosyal özellikler Ürün
ve/veya Hizmetlerimizin merkezi bir bileşenlerindendir. Forum sayfamızdan,
değerlendirme/yorum sayfamızdan başka kullanıcılar ile iletişime geçebilir,
örneğin Danışmanlarımıza, Ürün ve/veya Hizmetlerimize ilişkin görsellere yorum
yapabilir, etkileşime geçebilirsiniz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Danışmanlarımız;</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Danışmanlarımız profil
verilerinizi görebilir ve gönderdiğiniz mesajları okuyabilir. Ancak
Danışmanlarımız sizlerin iletişim bilgilerinizi göremez. Sadece Profil
Bilgileriniz doğrultusunda kişisel bilgilerinizi görüntüleyebilirler. Profil
Bilgilerinin kişisel bilgileriniz doğrultusunda olmasından kaynaklı aktarılan
veride, kişisel verinin alenileştirilmiş olması sebebiyle Talento Sound’un bir
sorumluluğu bulunmamaktadır. Danışmanlar ile gerçekleşen görüşmeler tamamen
gizlidir ve bu görüşmeler Talento Sound tarafından işlenmemektedir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Hizmet sağlayıcılarımız</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Talento Sound, Ürün
ve/veya Hizmet’i sağlamamıza yardım eden tedarikçilere sahiptir. Bu
tedarikçiler, Ürün ve/veya Hizmet’i sunmak ve görevleri gerçekleştirmek
amacıyla (reklam gösterme, analiz ve dolandırıcılığı önleme) yalnızca Talento
Sound talimatları uyarınca ve bunlara göre verilerinizi işler.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Diğer şirketler ve kamu
yetkilileri.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Ödemeleri doğrulamak (Param
gibi ödeme sağlayıcılarıyla) ve dolandırıcılık ve yasa dışı faaliyetle mücadele
etmek için, diğer şirket ve kuruluşlarla veri işleyebilir ve paylaşabilir ve
verileri yasal talepler olması halinde kamu yetkililerine verebiliriz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Aynı zamanda
verilerinizi onayınıza bağlı olarak, yasalara uymak veya kişisel hakları
mülkiyeti veya bizim, ebeveynler veya diğer kişilerin güvenliğini korumak
amacıyla ifşa edebiliriz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Reklamcılık ve Sosyal
Medya ortakları.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Hizmet; ortaklarımızdan
sosyal medya etkileşim araçları, ara yüz program uygulamaları aracılığıyla veya
yazılım geliştirme kitleri aracılığıyla sunulan özellikler gibi özellikler
barındırır. Bu ortaklar verilerinize erişebilir ve kendi gizlilik politikaları
uyarınca bunları kullanabilir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Bu ortakların veri
işleme uygulamaları hakkında daha fazla bilgi edinmek için, gizlilik
politikalarını incelemenizi öneririz. Bu ortaklar, aktivitelerinizle ve
cihazınızla ilgili (ör. IP adresiniz, mobil tanımlayıcılar, ziyaret ettiğiniz
sayfa/sayfalar, konumunuz, saat) verilere erişebilir. Ayrıca sizinle ilgili
topladığımız verileri üçüncü taraf reklam ortaklarıyla birleştirerek
paylaşabiliriz. Söz konusu reklam ortakları, bu verileri (ve diğer hizmetlerden
toplanan benzer verileri) kendi ağları içindeki üçüncü taraf hizmetlerini
ziyaret ettiğinizde size hedefli reklam sunmak amacıyla kullanabilir. Bu
ortaklar, kendi gizlilik politikaları uyarınca hareket edebilir. Bu uygulama
genelde “ilgi alanına dayalı reklam” veya “online davranışsal reklam” olarak adlandırılır.
Kişisel verilerinizi üçüncü taraf reklam ortaklarıyla paylaşmamayı tercih
ediyorsanız aşağıdaki “Haklarınız ve Seçenekleriniz” bölümündeki talimatları
takip edebilirsiniz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Uluslararası veri
aktarımları</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Uluslararası
Danışmanlar aracılığıyla Ürün ve/veya Hizmetlerimizden faydalanmak isterseniz,
yapılan görüşme talepleri, randevu süreci gibi konularda kişisel verilerinizin
paylaşılması gerekebilir. Farklı ülkeler, ülkenizdekinden farklı veri koruma
yasalarına sahip olabileceğinden, işbu Gizlilik Politikasında açıklanan şekilde
verilerinizin korunması için uygun tedbirlerin alınmasını sağlamak amacıyla
gerekli adımları atarız. Kullanabileceğimiz uygun tedbirler arasında, AB
Komisyonu tarafından onaylanan standart sözleşme maddeleri ve diğer yasal
tedbirler bulunmaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Bizlerle
Korumadasınız!</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel bilgilerinizi
kesinlikle özel ve gizli tutmayı; bunu bir sır saklama yükümlülüğü olarak
addetmeyi ve gizliliğin sağlanması ve sürdürülmesi, gizli bilginin tamamının
veya herhangi bir kısmının kamu alanına girmesini veya yetkisiz kullanımını
veya üçüncü bir kişiye ifşasını önlemek için gerekli tüm tedbirleri almayı ve
gerekli özeni göstermeyi taahhüt ederiz. Talento Sound gerekli bilgi güvenliği
önlemlerini almasına karşın, Site’ye ve sisteme yapılan saldırılar sonucunda
gizli bilgilerinizin zarar görmesi veya üçüncü kişilerin eline geçmesi
durumunda, Talento Sound’un herhangi bir sorumluluğu olmayacaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Talento Sound,
kullanıcılara ve kullanıcıların Site’yi kullanımına dair bilgileri, çerez
(Cookie) kullanarak elde edebilir. Bahsi geçen çerezler, ana bellekte saklanmak
üzere, bir web sitesinin, kullanıcının tarayıcısına (browser) gönderdiği küçük
metin dosyalarıdır. Teknik iletişim dosyası, bir web sitesi hakkında durum ve
tercihleri saklayarak, internetin kullanımını kolaylaştırır. Kısacası sunucu
bir sonraki kullanımız da sizin tercihlerinizi hatırlar. Çerezler, bir web
sitesini kaç kişinin kullandığı; bir kişinin web sitesini hangi amaçla, kaç kez
ziyaret ettiği ve sitede ne kadar kaldığı hakkında istatistiksel bilgileri elde
etmek amacıyla kullanılabilir. Ayrıca, kullanıcılar için özel olarak
tasarlanmış kullanıcı sayfalarından, dinamik olarak izinli pazarlama mesajı ve
içerik üretilmesine yardımcı olur. Çerezler, ana bellekten veya kullanıcıların
e-mail adresinden veri veya başkaca herhangi bir kişisel bilgi almak için
oluşturulmamıştır. Çerez kullanımı zorunlu olmamakla beraber kullanıcılar
dilerse, çerezlerin alınmamasını veya çerez işlenmesi halinde ikaz verilmesini
sağlayacak biçimde, tarayıcı ayarlarını değiştirebilirler.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Hangi
Çerezleri Kullanıyoruz?</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Analiz yapmak, hedefe
dönük reklamlar sunmak ve dolandırıcılığı önlemek için tanımlama bilgileri ve
benzer teknolojileri kullanırız. Tanımlama bilgileri ve benzer teknolojiler,
bize ve ortaklarımıza Ürün ve/veya Hizmet içinde tercihlerinizi kaydetme ve aktivitelerinizi
takip etme olanağı verir. Ortaklarımızın kendi gizlilik politikaları uyarınca
hareket edebileceğini lütfen unutmayın.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Bu işlemlerle amacımız:
dolandırıcılığı tespit etme ve önleme; kullanıcıların Ürün ve/veya Hizmet’i bir
cihazda kullanmasını ve daha sonra bıraktığı yerden başka bir cihazda sorunsuz
şekilde devam etmesini sağlama; analiz, kişiselleştirme ve ilişkilendirme;
bilinen veya tahmin edilen tüm cihazlarda kullanıcıya aynı reklamın gösterilme
sayısını sınırlandırma; ve/veya tüm cihazlardaki tarayıcı modellerinden elde
edilen verilerle cihazlarda kişiselleştirilmiş reklamlar sunmaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Daha fazla bilgi için </span><span lang="TR"><a href="https://talentosound.com/sozlesmeler/cerez-politikasi"><span style="mso-field-code:&quot;HYPERLINK \0022https\:\/\/kidolog\.com\/\0022&quot;"><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">talentosound.</span></span><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">com.tr</span><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;background:
yellow;mso-highlight:yellow"> /sozlesmeler/cerez-politikasi</span></a></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;adresini
ziyaret edin. Tarayıcı ayarlarınızdan çerezleri devre dışı bırakabilirsiniz
ancak bu durumda Ürün ve/veya Hizmet’in bazı özellikleri düzgün çalışmayabilir.</span></p>

<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse;mso-yfti-tbllook:1184;mso-padding-alt:0in 0in 0in 0in">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><em><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Zorunlu Çerezler</span></em><span lang="TR" style="font-family:
  &quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Bu çerezler zorunludur ve </span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Talento Sound Eğitim
  ve Danışmanlık Hizmetleri Ticaret Limited </span><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Şirketi İnternet sayfalarından kaldırılamaz. Kalıcı çerezler
  ziyaretçilerin tercihlerini hatırlatır ve tarayıcı vasıtasıyla
  bilgisayarınızda veya telefonunuzda depolanır.</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:1">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><em><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Tercih Çerezleri</span></em><span lang="TR" style="font-family:
  &quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Bu çerezler sizlerin site ve uygulama üzerindeki tercihlerini
  ve seçimlerinizi hatırlayarak sitemizde sunulan hizmetlerin sizin için
  kişiselleşmesini sağlamaktadır.</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:2">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><em><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Sosyal Medya Çerezleri</span></em><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Bu çerezler sizlerin sosyal medya kullanımlarınız hakkında
  bilgilerin toplanmasını sağlar.</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:3">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><em><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Performans ve Analiz Çerezleri</span></em><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Bu çerezler sayesinde sitemizi ve uygulamalarımızı
  kullanımınızı ve performans analizi yaparak sizlere verdiğimiz hizmetleri
  daha iyi hale getirebiliyoruz.</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:4">
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><em><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Hedefleme veya Reklam Çerezleri</span></em><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349"></span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">Bu tür çerezler kullanıcıların tanınması ve profillemesi,
  reklam ve pazarlama faaliyetlerinin hedeflenmesi ve içeriğin özelleştirilmesi
  amacı ile kullanılmaktadır.</span></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:5;mso-yfti-lastrow:yes">
  <td style="padding:0in 0in 0in 0in">
  <p class="MsoNormal" style="text-align:justify"><span lang="TR" style="font-family:
  &quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#212529">&nbsp;</span></p>
  </td>
  <td style="padding:0in 0in 0in 0in">
  <p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
  color:#030349">&nbsp;</span></p>
  </td>
 </tr>
</tbody></table>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Haklarınız
ve Seçenekleriniz</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Talento Sound kapsamında
E-Bülten e-postalarını almak amacıyla E-Bülten Üyeliği oluşturabilirsiniz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">E-bülten Üyeliği
almamayı da seçebilirsiniz. Bahsi geçen iletişimlerdeki talimatları takip
ederek bizden gelen E-bülten e-postalarını almayı bırakabilirsiniz. Hizmet,
Hizmet Şartları veya bu Gizlilik Politikası gibi konular hakkında pazarlama
amacı olmayan iletişimler almaya devam edebileceğinizi lütfen unutmayın.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Ayrıca verilerinizi
düzeltme, sildirme, verilerinizi kullanma ve paylaşma şeklimize itiraz etme ve
verilerinizi paylaşma şeklimizi kısıtlama hakkına da sahipsiniz. İzninizi
istediğiniz zaman geri alabilirsiniz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Tüm taleplere makul bir
süre içerisinde yanıt veririz. Sizi memnun edecek şekilde henüz
ilgilenmediğimiz çözülmemiş bir gizlilik veya veri kullanım sorunuz varsa
çözülmemiş şikayetler için iletisim@talentosound.com ile iletişime
geçebilirsiniz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Veri sahibi olarak
yukarıda belirtilen haklarınızdan herhangi birini kullanmak isterseniz lütfen
yukarıdaki “Bize Ulaşın” bölümünde belirtilen destek seçeneklerini kullanın.
Tüm taleplere yürürlükteki yasalar çerçevesinde yanıt verilir. Gizliliğinizi
korumak için talebinizi yerine getirmeden önce alışveriş faturası veya diğer
hesap bilgilerini sorabilir, üyelik hesabınızla e-posta adresinizi bağlamanızı
isteyebilir veya Hizmetlerimiz üzerindeki aktiviteleriniz hakkında size soru
sorarak kimliğinizi doğrulamak için ilave adımlar ekleyebiliriz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Verilerinizi
Nasıl Koruyoruz?</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Güvenli bir Ürün
ve/veya Hizmet deneyimi sağlamak için, verilerinizi izinsiz erişime, kaybolma,
uygunsuz kullanım veya değiştirilmeye karşı korumak amacıyla, sürekli olarak
idari, teknik ve fiziksel güvenlik önlemleri geliştiriyor ve uyguluyor; bu
şekilde güvenlik tedbirlerini sağlıyoruz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Verilerinizi, hesabınız
etkin olduğu ya da size Ürün ve/veya Hizmetin sağlanması için gerekli olduğu
sürece saklarız. Örneğin kullanılmayan ebeveyn hesaplarının kimliğini periyodik
olarak gizleyebilir ve gerekli olmayan verileri düzenli olarak araştırabilir ve
bunların kimliğini gizleyebiliriz. Kişisel verilerinizi kaldırmamızı talep
etmeniz durumunda, yerel yükümlülüklerimizi yerine getirmek, uyuşmazlıkları
gidermek ve sözleşmelerimizi uygulamak gibi meşru ticari çıkarlarımız için
gerekli süre boyunca verilerinizi saklayacağımızı lütfen göz önünde bulundurun.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Ebeveynlere
özel bilgiler</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Çocuklarınızdan bilerek
Kişisel Veriler toplamayız. Ancak Şirket politikası gereği, kanunların
çocukların Kişisel Verilerini toplamadan, kullanmadan veya ifşa etmeden önce
ebeveyn ya da vasi izni gereken durumlarda kanuna uyulur. Çocukların gizlilik
ihtiyaçlarını koruma amacına bağlıyız ve ebeveynlere ve vasilere çocuklarının
çevrimiçi aktiviteleri ve ilgi alanları konusunda aktif bir ol oynamalarını
kesinlikle tavsiye ediyoruz. Çocukların çevrimiçi gizliliğinin korunması bizim
için çok önemlidir. Genel olarak aşağıdaki paragrafta belirtilenler haricinde
çocukların kişisel verilerini bilerek toplamaz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Çocukların çevrimiçi
gizliliğinin korunması bizim için çok önemlidir. Üyelik Sözleşmesi’nde de
açıkça görüleceği üzere 18 yaşından küçük bireyler Ürün ve/veya
Hizmetlerimizden faydalanamaz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Çocuğun ebeveyni veya
velisiyseniz ve çocuğunuzdan toplanan kişisel verileri gözden geçirmek veya bu
bilgilerin değiştirilmesini veya silinmesini istiyorsanız bizimle iletişime
geçebilirsiniz. Yukarıda belirtilen şartlara rağmen çocuğun bize kişisel veriler
verdiğinin farkına varırsak bu verileri tutmak için yasal bir zorunluluk
haricinde toplanan tüm kişisel veriler silinir ve çocuğun hesabı sonlandırılır
ve/veya uygun duruma göre reşit olmayanlara uygun bir deneyime dönüştürülür.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Bir ebeveyn ya da vasi,
çocuğunun kendi izni olmadan bize Kişisel Verilerini sağladığını öğrenirse
lütfen şu adresten bizimle iletişime geçin:&nbsp;</span><span lang="TR"><a href="mailto:online@talentosound."><span style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;">online@talentosound.</span></a></span><span class="MsoHyperlink"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:
&quot;Segoe UI&quot;">com</span></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">. Bir çocuğun bize Kişisel Verilerini sağladığını öğrenmemiz
halinde bu verileri dosyalarımızdan sileriz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Toplanan kişisel
verileri gözden geçirmek veya bu bilgilerin değiştirilmesini veya silinmesini
istiyorsanız yukarıda belirtilen şekilde bizimle iletişime geçebilirsiniz.
Yukarıda belirtilen şartlara rağmen kişisel verilerin işlendiğinin farkına
varırsak bu verileri tutmak için yasal bir zorunluluk haricinde toplanan tüm
kişisel veriler silinir ve hesabı sonlandırılır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Güncellemelerimiz</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Talento Sound, işbu
Gizlilik Politikası hükümlerini, dilediği zaman Site’de yayınlamak suretiyle,
tek taraflı olarak değiştirebilir. Talento Sound değişiklik yaptığı Gizlilik
Politikası hükümleri, Site’de yayınlandığı tarih itibariyle yürürlüğe girer.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<h2 style="margin-top:0in;text-align:justify"><strong><span lang="TR" style="font-size:12.0pt;font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Times New Roman&quot;;
mso-bidi-theme-font:major-bidi;color:#030349">Talento Sound Eğitim ve
Danışmanlık Hizmetleri Ticaret Limited Şirketi </span></strong><span lang="TR" style="font-size:12.0pt;font-family:Roboto;color:#030349"></span></h2>

<p class="MsoNormal"><span lang="TR">&nbsp;</span></p>

<p class="MsoNormal"><span lang="TR">Altunizade Mah. Üniversite Sk. No:8
Üsküdar/İstanbul</span></p>',
               ],
               [
                    'user_id' => $superAdmin->user_id,
                    'title' => 'Çerez Politikası',
                    'slug' => Str::slug('Çerez Politikası'),
                    'content' => '<!--[if gte mso 9]><xml>
 <o:OfficeDocumentSettings>
  <o:RelyOnVML/>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:View>Normal</w:View>
  <w:Zoom>0</w:Zoom>
  <w:TrackMoves/>
  <w:TrackFormatting/>
  <w:PunctuationKerning/>
  <w:ValidateAgainstSchemas/>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:DoNotPromoteQF/>
  <w:LidThemeOther>TR</w:LidThemeOther>
  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
  <w:Compatibility>
   <w:BreakWrappedTables/>
   <w:SnapToGridInCell/>
   <w:WrapTextWithPunct/>
   <w:UseAsianBreakRules/>
   <w:DontGrowAutofit/>
   <w:SplitPgBreakAndParaMark/>
   <w:EnableOpenTypeKerning/>
   <w:DontFlipMirrorIndents/>
   <w:OverrideTableStyleHps/>
  </w:Compatibility>
  <m:mathPr>
   <m:mathFont m:val="Cambria Math"/>
   <m:brkBin m:val="before"/>
   <m:brkBinSub m:val="&#45;-"/>
   <m:smallFrac m:val="off"/>
   <m:dispDef/>
   <m:lMargin m:val="0"/>
   <m:rMargin m:val="0"/>
   <m:defJc m:val="centerGroup"/>
   <m:wrapIndent m:val="1440"/>
   <m:intLim m:val="subSup"/>
   <m:naryLim m:val="undOvr"/>
  </m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
  DefSemiHidden="false" DefQFormat="false" DefPriority="99"
  LatentStyleCount="376">
  <w:LsdException Locked="false" Priority="0" QFormat="true" Name="Normal"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 1"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 2"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 3"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 9"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 1"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 2"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 3"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 4"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 5"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 6"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 7"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 8"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="header"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footer"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index heading"/>
  <w:LsdException Locked="false" Priority="35" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="caption"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of figures"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope return"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="line number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="page number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of authorities"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="macro"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toa heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 5"/>
  <w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Closing"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Signature"/>
  <w:LsdException Locked="false" Priority="1" SemiHidden="true"
   UnhideWhenUsed="true" Name="Default Paragraph Font"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Message Header"/>
  <w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Salutation"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Date"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Note Heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Block Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Hyperlink"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="FollowedHyperlink"/>
  <w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>
  <w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Document Map"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Plain Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="E-mail Signature"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Top of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Bottom of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal (Web)"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Acronym"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Cite"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Code"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Definition"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Keyboard"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Preformatted"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Sample"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Typewriter"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Variable"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Table"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation subject"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="No List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Contemporary"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Elegant"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Professional"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Balloon Text"/>
  <w:LsdException Locked="false" Priority="39" Name="Table Grid"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Theme"/>
  <w:LsdException Locked="false" SemiHidden="true" Name="Placeholder Text"/>
  <w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>
  <w:LsdException Locked="false" SemiHidden="true" Name="Revision"/>
  <w:LsdException Locked="false" Priority="34" QFormat="true"
   Name="List Paragraph"/>
  <w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
  <w:LsdException Locked="false" Priority="30" QFormat="true"
   Name="Intense Quote"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="19" QFormat="true"
   Name="Subtle Emphasis"/>
  <w:LsdException Locked="false" Priority="21" QFormat="true"
   Name="Intense Emphasis"/>
  <w:LsdException Locked="false" Priority="31" QFormat="true"
   Name="Subtle Reference"/>
  <w:LsdException Locked="false" Priority="32" QFormat="true"
   Name="Intense Reference"/>
  <w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
  <w:LsdException Locked="false" Priority="37" SemiHidden="true"
   UnhideWhenUsed="true" Name="Bibliography"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
  <w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
  <w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
  <w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
  <w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
  <w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
  <w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
  <w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Mention"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Smart Hyperlink"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Hashtag"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Unresolved Mention"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Smart Link"/>
 </w:LatentStyles>
</xml><![endif]--><!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Table Normal";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-parent:"";
	mso-padding-alt:0in 5.4pt 0in 5.4pt;
	mso-para-margin:0in;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-ansi-language:TR;}
</style>
<![endif]-->

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"></span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"><strong><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;">Talento
Sound Eğitim ve Danışmanlık Hizmetleri Ticaret Limited Şirketi </span></strong></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">( </span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">“Talento Sound”</span></strong><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;veya </span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">“Şirket”
</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">olarak anılacaktır.) olarak,&nbsp;markamızın&nbsp;</span><span lang="TR"><a href="https://kidolog.com/"><span style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">talentosound.</span></a></span><span class="MsoHyperlink"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:
&quot;Segoe UI&quot;;color:#007BFF">com.tr</span></span><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349"> web sitesinde&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">(“Site”),</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">&nbsp;sitenin uzantılarında,&nbsp;uygulamalarımız yahut dijital
ortamda sizlerin kullanımına sunduğumuz benzeri tüm&nbsp;çevrimiçi&nbsp;veya
çevrimdışı&nbsp;mecralarımızı&nbsp;(anılan tüm mecralar birlikte&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">“Ortam”</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">&nbsp;olarak anılacaktır.)&nbsp;kullanımınız
veya&nbsp;ziyaretiniz sırasında sizlerin deneyimini&nbsp;geliştirmek için
birtakım&nbsp;teknolojilerden&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">(“Çerezler”)&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">faydalanmaktayız.&nbsp;</span><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349"><br>
</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349"><br>
</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Bu
teknolojilerin kullanımı, başta 6698 sayılı Kişisel Verilerin Korunması
Kanunu&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">(“KVKK” veya “Kanun”)&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">olmak üzere
tabi olduğumuz mevzuata uygun şekilde gerçekleştirilmektedir.</span><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349"><br>
</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349"><br>
</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">İşbu&nbsp;Çerez
Politikası’nın&nbsp;amacı,&nbsp;Ortamlara erişim esnasında kullanılmakta
olan&nbsp;çerezler vasıtasıyla kişisel verilerin işlenmesine dair sizlere bilgi
vermektir.&nbsp;&nbsp;İşbu metinde sitemizde ve uygulamalarımızda hangi
amaçlarla hangi tür çerezleri kullandığımızı ve bu çerezleri nasıl kontrol
edebileceğinizi sizlere açıklıyoruz.</span><span lang="TR" style="font-family:
&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"><br>
</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349"><br>
</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Talento
Sound olarak sitemizde ve uygulamalarımızda kullandığımız çerezleri gerekmesi
durumunda kullanmaktan vazgeçebilir, bunların türlerini veya fonksiyonlarını
değiştirebilir veya sitemize ve uygulamalarımıza yeni çerezler ekleyebiliriz.
Dolayısıyla&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">işbu Çerez Politikası’nın
hükümlerini öncesinde sitemizde yayınlamak ve gerekli aydınlatmayı yapmak
koşuluyla</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">&nbsp;dilediğimiz zaman değiştirme hakkını saklı tutarız. Güncel
Çerez Politikası üzerinde gerçekleştirilmiş olan her türlü değişiklik Sitede,
uygulamada veya herhangi bir kamuya açık mecrada yayınlanmakla birlikte
yürürlük kazanacaktır. Son güncelleme tarihini metnin sonunda yer almaktadır.</span><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349"><br>
<br>
<strong><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></strong><b><br>
<strong><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel
Veri Toplamanın Yöntemi ve Hukuki Sebebi</span></strong></b></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"><br>
</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel
verileriniz, internet sitemizi ziyaretiniz kapsamında veya uygulamalarımızı
kullanmanız dolayısıyla elektronik ortamda çerezler yoluyla Şirketimizin meşru
menfaati hukuki sebebine dayalı olarak toplanmaktadır. Hedefleme ve profilleme
vasıtasıyla gerçekleştirilen tanıtım faaliyetleri ise yalnızca açık rızanız
olması halinde gerçekleştirilmektedir.&nbsp;Toplanan kişisel verileriniz
Kanun’un 5. ve 6. maddelerinde belirtilen kişisel veri işleme şartları ve
amaçları kapsamında işbu Çerez Politikası’nda belirtilen
amaçlarla&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
da&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; işlenebilmektedir.</span><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349"><br>
<strong><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></strong><b><br>
<strong><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel
Verilerin Kimlere ve Hangi Amaçla Aktarılabileceği</span></strong></b></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">AB’nin
kişisel verilere ilişkin düzenlemesi&nbsp;Genel Veri Koruma
Regülasyonu&nbsp;(GDPR),&nbsp;web sitesi&nbsp;ziyaretçilerine her zaman, hangi
amaçla, niçin ve verilerinin nerede kayıtlı oldukları konusunda güncel bilgi
alma hakkını vermektedir.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Aynı
zamanda kişisel veriler, 6698 Sayılı Kişisel Verilerin Korunması Kanunu
çerçevesince de işlenebilmektedir.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"><br>
</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirket
olarak, Çerez Politikası kapsamındaki kişisel verilerinizi yukarıda belirtilen
amaçların gerçekleştirilebilmesi ile sınırlı olarak kişisel verileriniz, 6698
sayılı KVKK 8. ve 9. maddeleri kapsamındaki veri işleme şartları çerçevesinde
kanunen yetkili kamu kurumları, iş ortaklarımız ve tedarikçilerimizle
paylaşılabilecektir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Hangi
Çerezler Hangi Amaçlarla Kullanılmaktadır?</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"><br>
<strong><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;">Şirket
olarak</span></strong></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">&nbsp;sitemizde ve uygulamalarımızda çeşitli amaçlarla çerezler
kullanmakta ve bu çerezler vasıtasıyla kişisel verilerinizi işlemekteyiz. Bu
amaçlarla kullanılan başlıca çerezler şunlardır:</span></p>

<ul style="margin-top:0in" type="disc"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l0 level1 lfo1;
     tab-stops:list .5in"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Site’nin ve uygulamaların çalışması için
     gerekli temel fonksiyonları gerçekleştirmek.&nbsp;</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;">Örneğin,
     oturum açan üyelerin Site’de farklı sayfaları ziyaret ederken tekrar şifre
     girmelerine gerek kalmaması.</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l0 level1 lfo1;
     tab-stops:list .5in"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Site’yi ve uygulamaları analiz etmek,
     Site’nin ve uygulamaların performansını arttırmak.</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;Örneğin,
     Site’nin üzerinde çalıştığı farklı sunucuların entegrasyonu, Site’yi
     ziyaret edenlerin sayısının tespit edilmesi ve buna göre performans
     ayarlarının yapılması ya da ziyaretçilerin aradıklarını bulmalarının
     kolaylaştırılması.</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l0 level1 lfo1;
     tab-stops:list .5in"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Site’nin ve uygulamaların işlevselliğini
     arttırmak ve kullanım kolaylığı sağlamak.</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;Örneğin,
     Site’yi ziyaret eden ziyaretçinin daha sonraki ziyaretinde kullanıcı adı
     bilgisinin ya da arama sorgularının hatırlanması.</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l0 level1 lfo1;
     tab-stops:list .5in"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Kişiselleştirme, hedefleme ve reklamcılık
     faaliyeti gerçekleştirmek.</span></strong><span lang="TR" style="font-family:
     &quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;Örneğin,
     ziyaretçilerin görüntüledikleri sayfa ve ürünler üzerinden ziyaretçilerin
     ilgi alanlarıyla bağlantılı reklam gösterilmesi.</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l0 level1 lfo1;
     tab-stops:list .5in"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">İnternet sitesi üzerinden yeni özellikler
     sunmak ve sunulan özellikleri kişinin tercihlerine göre kişiselleştirmek.</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;"></span></li></ul>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"><br>
<strong><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;">Sitemizde
ve Uygulamalarımızda Kullanılan Çerezler</span></strong></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"><br>
</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Aşağıda
sitemizde ve uygulamalarımızda kullandığımız farklı türdeki çerezleri
bulabilirsiniz. Sitemizde ve uygulamalarımızda hem birinci parti çerezler
(ziyaret ettiğiniz site tarafından yerleştirilen) hem de üçüncü parti çerezleri
(ziyaret ettiğiniz site haricindeki sunucular tarafından yerleştirilen)
kullanılmaktadır.</span><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"><br>
<strong><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></strong><b><br>
<strong><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;">1.
Zorunlu Çerezler</span></strong></b></span><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"><br>
</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Belli
çerezlerin kullanımı sitemizin ve uygulamalarımızın doğru biçimde çalışması ve
güvenliği için zorunludur. Örneğin sitemizde oturum açtığınızda devreye giren
kimlik doğrulama çerezleri, sitemizde bir sayfadan diğerine geçişinizde etkin
olan oturumunuzun devam etmesini sağlamaktadır. Bu çerezler zorunludur ve Talento
Sound Eğitim ve Danışmanlık Hizmetleri Ticaret Limited Şirketi İnternet
sayfalarından kaldırılamaz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kalıcı çerezler
ziyaretçilerin tercihlerini hatırlatır ve tarayıcı vasıtasıyla bilgisayarınızda
veya telefonunuzda depolanır. Bu çerezler sayesinde ziyaretçilerimize uygun ve
özel teklifler sunulabilir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Yine bu çerezler
sayesinde ziyaretçi siteden ayrıldığı vakit, sayfayı kapatıp açtığında
karsısına aynı sayfa çıkacaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Bu çerezler
oturumunuzdan sonra tarayıcınızda saklanan çerezlerdir. Kalıcı bir çerez, siz
cihazınızdan temizlemediğiniz takdirde bilgisayarınızda kalacaktır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Bu çerezler isteğe
bağlıdır ve bu sayfanın üstündeki çerez ayarları iletişim kutusundan
kaldırılabilir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">2.
Tercih Çerezleri</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Bu çerezler sizlerin
site ve uygulama üzerindeki tercihlerini ve seçimlerinizi hatırlayarak
sitemizde sunulan hizmetlerin sizin için kişiselleşmesini sağlamaktadır.
Örneğin sitemiz üzerindeki dil seçiminizi veya bir metin okurken seçmiş
olduğunuz font boyutunu hatırlamamızı sağlar.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Bu çerezler isteğe
bağlıdır ve bu sayfanın üstündeki çerez ayarları iletişim kutusundan
kaldırılabilir</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">3.
Sosyal Medya Çerezleri</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"><br>
</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Bu
çerezler sizlerin sosyal medya kullanımlarınız hakkında bilgilerin toplanmasını
sağlar. Örneğin Kişiselleştirilmiş reklamlar oluşturulması ya da market
araştırmaları yapılması için Facebook /Twitter hesaplarınıza ait bilgilerin
kullanılması için çerezler kullanılabilir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">4.
Performans ve Analiz Çerezleri</span></strong><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"><br>
</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Bu
çerezler sayesinde sitemizi ve uygulamalarımızı kullanımınızı ve performans
analizi yaparak sizlere verdiğimiz hizmetleri daha iyi hale getirebiliyoruz.
İnternet sitesini ziyaret edenlerin sayıları, internet sitesinde görüntülenen
sayfaların tespiti, internet sitesi ziyaret saatleri, internet sitesi sayfaları
kaydırma hareketleri gibi analitik sonuçların üretimini sağlayan çerezlerdir.
Örneğin bu çerezler sayesinde ziyaretçilerimizin en çok hangi sayfaları
görüntülediğini, sitemizin gerektiği gibi çalışıp çalışmadığını ve olası
problemleri tespit edebiliyoruz. Performans ve analiz çerezleri isteğe bağlı
olup bu sayfanın çerez ayarları iletişim kutusundan kaldırılabilir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">5.
Hedefleme veya Reklam Çerezleri</span></strong><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"><br>
</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Sizlere
sitemizde veya sitemiz haricindeki mecralarda ürün ve hizmet tanıtımını yapmak
için çerezler kullanıyoruz. Ayrıca bazı iş ortaklarımızla sizlere sitemiz
dahilinde veya dışında reklam ve tanıtım yapmak için iş birliğine gidebiliriz.
Bu tür çerezler kullanıcıların tanınması ve profillenmesi, reklam ve pazarlama
faaliyetlerinin hedeflenmesi ve içeriğin özelleştirilmesi amacı ile
kullanılmaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Bu çerezler, internet
sitemizi ve üçüncü taraflara ait alan adlarını ziyaretiniz sırasında
oluşturulan birincil ve üçüncü taraf çerezlerdir. Bu çerezler oluşturuldukları
alan adlarındaki tıklama ve ziyaret geçmişinizin takibini ve farklı alan adları
arasında bu kayıtların eşlenmesini mümkün kılmaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Bu çerezler isteğe
bağlıdır ve çerez alanından veya bu sayfanın üstündeki iletişim kutusundan açık
bir şekilde kabul edilmelidir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Çerezlerin
Kullanımını Nasıl Kontrol Edebilirim?</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"><br>
</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Çerez
ve benzeri teknolojilerin kullanımı konusunda ziyaretçi ve kullanıcılarımızın
tercihleri bizler için esastır. Buna karşın, Ortam’ın çalışması için zorunlu
olan çerezlerin kullanılması gerekmektedir. Ek olarak bazı çerezlerin
kapatılması halinde Ortam’ın birtakım işlevlerinin kısmen ya da tamamen
çalışmayabileceğini hatırlatmak isteriz.</span><span lang="TR" style="font-family:
&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"><br>
</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Çoğu İnternet
tarayıcısı, çerezleri kabul edecek şekilde ayarlanmıştır. Tarayıcınızı bazı
çerezleri kabul etmeden önce sizi uyaracak veya bazı çerezleri reddedecek
şekilde ayarlayabilirsiniz. Ancak İnternet tarayıcınızda çerez kullanımını
devre dışı bırakırsanız&nbsp;</span><strong><span lang="TR" style="font-family:
&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Talento Sound
Eğitim ve Danışmanlık Hizmetleri Ticaret Limited Şirketi</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;İnternet
sayfalarındaki bazı özellikleri kullanmanız zorlaşabilir veya bu özellikler
doğru&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">çalışmayabilir.&nbsp;Aynı
zamanda daha önce tarayıcınıza kaydedilmiş çerezlerin silinmesi de mümkündür.
Çerezlerin silinmesine ilişkin işlemler, kullandığınız tarayıcıya göre
değişebilmektedir.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"><br>
</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Ziyaretçiler,&nbsp;Ortam’ı&nbsp;görüntüledikleri
tarayıcı ayarlarını değiştirerek çerezlere ilişkin tercihlerini kişiselleştirme
imkânına sahiptir. Eğer kullanılmakta olan tarayıcı bu imkânı sunmaktaysa,
tarayıcı ayarları üzerinden&nbsp;çerezlere&nbsp;ilişkin tercihleri değiştirmek
mümkündür. Böylelikle, tarayıcının sunmuş olduğu imkânlara göre farklılık
gösterebilmekle birlikte, veri sahiplerinin çerezlerin kullanılmasını
engelleme, çerez kullanılmadan önce uyarı almayı tercih etme veya sadece bazı&nbsp;çerezleri&nbsp;devre
bırakma ya da silme imkânları bulunmaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Mobil cihazlar
üzerinden&nbsp;çerezleri&nbsp;yönetmek için mobil cihaza ait ayarlar menüsü
kullanılabilir.&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Talento
Sound Eğitim ve Danışman Hizmetleri Ticaret Limited Şirketi</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">, üçüncü şahıs
hizmet sağlayıcılarımız veya ortaklarımız da ziyaret ettiğiniz diğer İnternet
sayfalarında gösterilen reklamların performansını yönetmek veya ölçmek için
çerez veya başka takip teknolojileri kullanabilir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Talento
Sound Eğitim ve Danışman Hizmetleri Ticaret Limited Şirketi,</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;İnternet
sayfalarını kayıtlı bir kullanıcı olarak veya başka şekilde ziyaret ederek,
etkinliklerinizi ve hizmet ve işlevleri kullanma şeklinizi yukarıda bahsedilen
teknolojiler ve gelecekte geliştirilebilecek benzer teknolojiler ile takip
ettiğimizi biliyor ve bizlere bunun için izin vermiş kabul ediliyorsunuz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Üçüncü şahıslar&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">Talento Sound Eğitim ve Danışman Hizmetleri Ticaret Limited
Şirketi,</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">&nbsp;İnternet sayfalarımızı ziyaret ettiğinizde kendi takip teknolojilerini
kurabilir ve bunlara erişebilirler.&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Talento
Sound Eğitim ve Danışman Hizmetleri Ticaret Limited Şirketi,</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;&nbsp;İnternet
sayfalarını kullandığınızda zaman içinde ve farklı İnternet sayfası veya
uygulamalar arasında siz ve çevrimiçi etkinlikleriniz hakkında bilgilere
erişebilirler. Bu tip takip teknolojilerini nasıl kullanacaklarını kontrol
edemeyiz ve kendi gizlilik kuralları bulunmaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"><br>
<strong><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;">Veri
Sahibi Olarak Haklarınız Nelerdir?</span></strong></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349"><br>
</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel
Verilerin Korunması Kanunu’nun 11. maddesi uyarınca veri sahipleri,</span></p>

<ul style="margin-top:0in" type="disc"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo2;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">kişisel veri işlenip işlenmediğini
     öğrenme,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo2;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">kişisel verileri işlenmişse buna ilişkin
     bilgi talep etme,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo2;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">kişisel verilerin işlenme amacını ve
     bunların amacına uygun kullanılıp kullanılmadığını öğrenme,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo2;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">yurt içinde veya yurt dışında kişisel
     verilerin aktarıldığı üçüncü kişileri bilme,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo2;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">kişisel verilerin eksik veya yanlış
     işlenmiş olması hâlinde bunların düzeltilmesini isteme ve bu kapsamda
     yapılan işlemin kişisel verilerin aktarıldığı üçüncü kişilere
     bildirilmesini isteme,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo2;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">KVKK ve ilgili mevzuata uygun olarak
     işlenmiş olmasına rağmen, işlenmesini gerektiren sebeplerin ortadan
     kalkması hâlinde kişisel verilerin silinmesini veya yok edilmesini isteme
     ve bu kapsamda yapılan işlemin kişisel verilerin aktarıldığı üçüncü
     kişilere bildirilmesini isteme,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo2;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">işlenen verilerin münhasıran otomatik
     sistemler vasıtasıyla analiz edilmesi suretiyle kişinin kendisi aleyhine
     bir sonucun ortaya çıkmasına itiraz etme,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo2;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">kişisel verilerin kanuna aykırı olarak
     işlenmesi sebebiyle zarara uğraması hâlinde zararın giderilmesini talep
     etme</span></li></ul>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">haklarına sahiptir.</span><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349"><br>
<strong><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;">&nbsp;</span></strong><br>
</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Yukarıda
sıralanan haklarınızla ilgili başvurularınızı&nbsp;</span><span lang="TR"><a href="https://kidolog.com/"><span style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">talentosound.</span></a></span><span class="MsoHyperlink"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:
&quot;Segoe UI&quot;;color:#007BFF">com.tr</span></span><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349"> adresinden ulaşabileceğiniz İletişim
Formu’nu doldurarak Şirketimize iletebilirsiniz.&nbsp; Talebiniz 30 gün içinde
sonuçlandırılarak cevap iletilecektir. Talepler kural olarak ücretsiz
karşılanır ancak, talebin gereğini yerine getirmek masraf gerektiriyorsa “Veri
Sorumlusuna Başvuru Usul ve Esasları Hk. Tebliğ” madde 7’de öngörülen;&nbsp;</span><em><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">“İlgili kişinin başvurusuna yazılı olarak cevap verilecekse, 10
sayfaya kadar ücret alınmaz. 10 sayfanın üzerindeki her sayfa için 1 TL işlem
ücreti alınabilir. Başvuruya cevabın CD, flash bellek gibi bir kayıt ortamında
verilmesi halinde veri sorumlusu tarafından talep edilebilecek ücret kayıt
ortamının maliyetini geçemez.”</span></em><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;hükmü gereğince&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">Şirket&nbsp;</span></strong><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349">tarafından ücret istenebilecektir.</span></p>',
               ],
               [
                    'user_id' => $superAdmin->user_id,
                    'title' => 'Aydınlatma Metni',
                    'slug' => Str::slug('Aydınlatma Metni'),
                    'content' => '<!--[if gte mso 9]><xml>
 <o:OfficeDocumentSettings>
  <o:RelyOnVML/>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:View>Normal</w:View>
  <w:Zoom>0</w:Zoom>
  <w:TrackMoves/>
  <w:TrackFormatting/>
  <w:PunctuationKerning/>
  <w:ValidateAgainstSchemas/>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:DoNotPromoteQF/>
  <w:LidThemeOther>TR</w:LidThemeOther>
  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
  <w:Compatibility>
   <w:BreakWrappedTables/>
   <w:SnapToGridInCell/>
   <w:WrapTextWithPunct/>
   <w:UseAsianBreakRules/>
   <w:DontGrowAutofit/>
   <w:SplitPgBreakAndParaMark/>
   <w:EnableOpenTypeKerning/>
   <w:DontFlipMirrorIndents/>
   <w:OverrideTableStyleHps/>
  </w:Compatibility>
  <m:mathPr>
   <m:mathFont m:val="Cambria Math"/>
   <m:brkBin m:val="before"/>
   <m:brkBinSub m:val="&#45;-"/>
   <m:smallFrac m:val="off"/>
   <m:dispDef/>
   <m:lMargin m:val="0"/>
   <m:rMargin m:val="0"/>
   <m:defJc m:val="centerGroup"/>
   <m:wrapIndent m:val="1440"/>
   <m:intLim m:val="subSup"/>
   <m:naryLim m:val="undOvr"/>
  </m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
  DefSemiHidden="false" DefQFormat="false" DefPriority="99"
  LatentStyleCount="376">
  <w:LsdException Locked="false" Priority="0" QFormat="true" Name="Normal"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 1"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 2"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 3"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 9"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 1"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 2"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 3"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 4"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 5"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 6"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 7"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 8"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="header"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footer"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index heading"/>
  <w:LsdException Locked="false" Priority="35" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="caption"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of figures"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope return"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="line number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="page number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of authorities"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="macro"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toa heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 5"/>
  <w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Closing"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Signature"/>
  <w:LsdException Locked="false" Priority="1" SemiHidden="true"
   UnhideWhenUsed="true" Name="Default Paragraph Font"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Message Header"/>
  <w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Salutation"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Date"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Note Heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Block Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Hyperlink"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="FollowedHyperlink"/>
  <w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>
  <w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Document Map"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Plain Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="E-mail Signature"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Top of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Bottom of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal (Web)"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Acronym"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Cite"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Code"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Definition"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Keyboard"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Preformatted"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Sample"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Typewriter"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Variable"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Table"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation subject"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="No List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Contemporary"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Elegant"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Professional"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Balloon Text"/>
  <w:LsdException Locked="false" Priority="39" Name="Table Grid"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Theme"/>
  <w:LsdException Locked="false" SemiHidden="true" Name="Placeholder Text"/>
  <w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>
  <w:LsdException Locked="false" SemiHidden="true" Name="Revision"/>
  <w:LsdException Locked="false" Priority="34" QFormat="true"
   Name="List Paragraph"/>
  <w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
  <w:LsdException Locked="false" Priority="30" QFormat="true"
   Name="Intense Quote"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="19" QFormat="true"
   Name="Subtle Emphasis"/>
  <w:LsdException Locked="false" Priority="21" QFormat="true"
   Name="Intense Emphasis"/>
  <w:LsdException Locked="false" Priority="31" QFormat="true"
   Name="Subtle Reference"/>
  <w:LsdException Locked="false" Priority="32" QFormat="true"
   Name="Intense Reference"/>
  <w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
  <w:LsdException Locked="false" Priority="37" SemiHidden="true"
   UnhideWhenUsed="true" Name="Bibliography"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
  <w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
  <w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
  <w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
  <w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
  <w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
  <w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
  <w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Mention"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Smart Hyperlink"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Hashtag"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Unresolved Mention"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Smart Link"/>
 </w:LatentStyles>
</xml><![endif]--><!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Table Normal";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-parent:"";
	mso-padding-alt:0in 5.4pt 0in 5.4pt;
	mso-para-margin:0in;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-ansi-language:TR;}
</style>
<![endif]-->

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">6698
Sayılı Kişisel Verilerin Korunması Kanunu Kapsamında Aydınlatma Metni</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Talento
Sound Eğitim ve Danışmanlık&nbsp;Hizmetleri Ticaret Limited Şirketi ("Talento
Sound" veya “Şirket”</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">) olarak, kişisel verilerinizin gizliliği ve güvenliği en önemli
önceliklerimiz arasındadır. Bu kapsamda 6698 sayılı Kişisel Verilerin Korunması
Kanunu’nun (</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">"KVKK" veya
“Kanun”)&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">10. maddesinden doğan aydınlatma yükümlülüğümüzü yerine getirmek
amacıyla kişisel verileriniz hakkında sizleri bilgilendirmek isteriz. Talento
Sound tarafından işlenen kişisel verileriniz, bunların işlenme amaçları,
aktarılabileceği alıcı grupları, toplanma yöntemi, hukuki sebebi ve söz konusu
kişisel verilere ilişkin haklarınız aşağıda yer almaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Şirketin açık
adresi&nbsp;</span><em><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Altunizade Mah. Üniversite Sk.
No:8 Üsküdar/İSTANBUL, Vergi No:&nbsp;8171681660’</span></em><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">dır.&nbsp; KVKK
açısından Talento Sound&nbsp;</span><strong><span lang="TR" style="font-family:
&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">“Veri Sorumlusu”</span></strong><em><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">&nbsp;</span></em><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">sıfatıyla faaliyet göstermektedir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l4 level1 lfo1;
     tab-stops:list .5in"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel Verilerinizi Hangi Amaçlarla
     Topluyoruz?</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;"></span></li></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Toplanan kişisel
verileriniz, Kanun tarafından öngörülen temel ilkelere uygun olarak ve Kanun’un
5. ve 6. maddelerinde belirtilen kişisel veri işleme şartları ve amaçları
dahilinde, Talento Sound tarafından aşağıda yer alan amaçlar doğrultusunda
işlenebilecektir:</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l9 level1 lfo2;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Talento Sound tarafından sunulan mal ve
     hizmetleri tanıtmak, üyeleri tanımak ve iletişimi arttırmak, imajı
     arttırmak, ürün, hizmet ve iletişimini geliştirmek, müşterilere özel
     promosyon /tanıtım /kampanya ve duyurular hazırlanması ve gönderilmesi,
     ürün ve hizmetlerin kullanımına ve/veya ödeme koşullarına ilişkin olarak
     yapılacak değişiklerin bildirilmesi, müşteri anketi, müşteri memnuniyeti
     uygulamaları ve bilgilendirmeleri yapabilmek, denetim, veri analizi,
     araştırma, istatistiksel çalışma, trendleri anlama, pazarlama ve reklam
     hizmetlerinde kullanmak,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l9 level1 lfo2;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Talento Sound tarafından yürütülen ticari
     faaliyetlerin gerçekleştirilmesi için ilgili iş birimlerimiz tarafından
     gerekli çalışmaların yapılması ve buna bağlı iş süreçlerinin yürütülmesi,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l9 level1 lfo2;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Talento Sound’un ticari ve/veya iş
     stratejilerinin planlanması ve icrası,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l9 level1 lfo2;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Talento Sound’un ve Talento Sound’la iş
     ilişkisi içerisinde olan ilgili kişilerin hukuki, teknik ve ticari-iş
     güvenliğinin temini,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l9 level1 lfo2;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">İlgili mevzuat hükümleri
     gereği&nbsp;akdettiğimiz sözleşmeler uyarınca üstlenilen yükümlülükleri
     ifa etmek, yasal yükümlülüğü yerine getirebilmek ve yürürlükteki
     mevzuattan doğan haklarımızı kullanabilmek,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l9 level1 lfo2;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Kamu güvenliğine ilişkin hususlarda talep
     halinde ve mevzuat gereği kamu görevlilerine bilgi verebilmek,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l9 level1 lfo2;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Doğabilecek uyuşmazlıklarda delil olarak
     kullanılmak</span></li></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l7 level1 lfo3;
     tab-stops:list .5in"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Talento Sound Hangi Kişisel Verilerinizi
     İşliyor?</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;"></span></li></ol>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Kimlik
Bilgileri&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">İsminiz, soy
isminiz, T.C. kimlik numaranız, doğum tarihi ve Talento Sound’a tarafınızca
açık rızanız dahilinde temin edilen sair bilgiler.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">İletişim
Bilgileri&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Cep telefon
numaranız, e-posta adresiniz ve adres bilgileriniz</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Finans
Bilgileri</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Ödemelere ve
ödeme yöntemlerine ilişkin bilgileriniz</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Müşteri
İşlem Bilgileri</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">: Alışveriş/ sipariş geçmişi, sipariş bilgisi, sipariş sayısı,
fatura bilgileri, talep/ şikayet bilgisi, yorum, puan ve değerlendirme
bilgileriniz</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l0 level1 lfo4;
     tab-stops:list .5in"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Hakkınızda Hangi Kişisel Verileri Hangi
     Yollarla Topluyoruz?</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;"></span></li></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel verileriniz üye
kayıt formu, internet üzerinden doldurulan kayıt/başvuru formları Talento Sound
resmi e-mail adresi olan online</span><span lang="TR">@talentosound.com</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;adresine,
Talento Sound’a ait herhangi bir mail adresine kişisel veri gönderilmesi
durumunda söz konusu iletişim kanalları vasıtasıyla toplanmaktadır. Bu kapsamda
Talento Sound, üye kayıt sürecinde kimlik fotokopisi, adres gösterir belge
(ikametgah, elektrik faturası vb. belgeler), banka/IBAN numarası bilgisi ve
sosyal medya hesabı/internet sitesi bağlantısı gibi evrakları üye /kullanıcı
adaylarından talep edilebilir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel veriler,
fiziken evrak gönderilmesi, Talento Sound’un sağladığı bir evrakın fiziken
doldurulması, 05523209427, 02163582225 numaralı hatların veya Talento Sound’a
ait diğer dahili numaraların aranması suretiyle de toplanmaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel verileriniz
ayrıca otomatik yollarla, markamız olan Talento Sound&nbsp;</span><span lang="TR">www.talentosound.online</span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">&nbsp;adresinde ve uzantılarında kullanılan çerezler (cookie)
vasıtasıyla da toplanmaktadır. Söz konusu çerezler, yalnızca ziyaretçinin
siteyi tam</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">verimlilikte
kullanabilmesi için gerekli çerezler olup ziyaretçinin tercihlerini</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">&nbsp;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">hatırlamak amacıyla kullanılmakta ve başka bir kişisel veri
temin etmemektedir.&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l6 level1 lfo5;
     tab-stops:list .5in"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel Veri İşlemenin Hukuki Sebebi</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;"></span></li></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">KVKK, kişisel verilerin
işlenme şartlarını 5. maddesinin 2. fıkrasında listelemektedir. Eğer bir veri
sorumlusu tarafından kişisel verilerin işlenme amaçları, KVKK’da listelenmiş
olan kişisel veri işleme şartları çerçevesinde değerlendirilebiliyorsa, o veri
sorumlusu kişisel verileri hukuka uygun olarak işleyebilmektedir. Bu kapsamda Talento
Sound tarafından da güdülmekte olan kişisel veri işleme amaçlarının, KVKK’da
düzenlenen kişisel veri işleme şartları kapsamında değerlendirilebildiği
durumlarda Talento Sound tarafından kişisel veri işleme faaliyetleri
gerçekleştirilmektedir. Talento Sound kişisel veri işleme şartları kapsamına
girmeyen herhangi bir kişisel veri işleme faaliyetinde bulunmamaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">KVKK’da yer alan
kişisel veri işleme şartları şunlardır</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">;</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<ul style="margin-top:0in" type="disc"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l10 level1 lfo6;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">İlgili kişinin açık rızasının bulunması,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l10 level1 lfo6;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Kanunlarda açıkça öngörülmesi,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l10 level1 lfo6;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Fiili imkânsızlık nedeniyle rızasını
     açıklayamayacak durumda bulunan veya rızasına hukuki geçerlilik tanınmayan
     kişinin kendisinin ya da bir başkasının hayatı veya beden bütünlüğünün
     korunması için zorunlu olması,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l10 level1 lfo6;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Bir sözleşmenin kurulması veya ifasıyla
     doğrudan doğruya ilgili olması kaydıyla sözleşmenin taraflarına ait
     kişisel verilerin işlenmesinin gerekli olması,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l10 level1 lfo6;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Veri sorumlusunun hukuki yükümlülüğünü
     yerine getirebilmesi için zorunlu olması,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l10 level1 lfo6;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Veri sahibinin kendisi tarafından
     alenileştirilmiş olması,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l10 level1 lfo6;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Bir hakkın tesisi, kullanılması veya
     korunması için veri işlemenin zorunlu olması,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l10 level1 lfo6;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Veri sahibinin temel hak ve
     özgürlüklerine zarar vermemek kaydıyla, veri sorumlusunun meşru
     menfaatleri için veri işlenmesinin zorunlu olması.</span></li></ul>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l1 level1 lfo7;
     tab-stops:list .5in"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Kişisel Verilerinizi Kimlerle
     Paylaşıyoruz?</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;"></span></li></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Kişisel verileriniz bu
Aydınlatma Metninde gösterilen amaçlar için ve buradaki vasıtalarla, yetkili
kamu kurum ve kuruluşları, yargı mercileri, infaz mercileri, emniyet birimleri
ile sözleşmeli ürün ve veya hizmet alınan tedarikçiler, iş ortakları ve danışmanlarıyla
ile paylaşılmaktadır.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Talento Sound
faaliyetlerinin tamamlayıcısı niteliğindeki hizmetleri aldığı işbirliği yaptığı
danışman kuruluş taraflarla yürüttükleri faaliyetlerin amaçlarıyla sınırlı
olarak veri paylaşımı yapılabilmektedir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Talento Sound
amaçlarını ilgilendirmeyen hiçbir veri aktarımı yapmamaktadır. Örneğin; rızanız
doğrultusunda elde etmiş olsak dahi araç plakanıza ait bilgiler yukarıda
gösterilen kişi ve kurumlar da dahil olmak üzere hiçbir üçüncü kişi ile
paylaşılmamaktadır. Bu belirlemenin istisnası, söz konusu veriye ilişkin
aktarımın mevzuat ile zorunlu kılınması, yahut bir suç soruşturması için
mecburi olması veya resmî bir makamca mevzuata dayalı olarak ve gerekçesi
gösterilerek talep edilmesidir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l3 level1 lfo8;
     tab-stops:list .5in"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Haklarınız Nelerdir?</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;"></span></li></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Hakkınızda tuttuğumuz
kişisel verilerin doğru ve güncel olması önemlidir. Bu nedenle kişisel
verilerinizde bir değişiklik meydana geldiğinde lütfen bize bildiriniz. Aksi
halde, sistemlerimizde tuttuğumuz verilerdeki yanlışlıklardan sorumlu
olmayacağımızı bildiririz. KVKK’nın “İstisnalar” başlıklı 28. maddesinde
öngörülen haller saklı kalmak kaydıyla, Kanun’un 11. maddesi çerçevesinde
haklarınız; Şirkete başvurarak, kişisel verilerinizin;</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l2 level1 lfo9;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">işlenip işlenmediğini öğrenme,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l2 level1 lfo9;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">kişisel verileriniz işlenmişse buna
     ilişkin bilgi talep etme,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l2 level1 lfo9;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">kişisel verilerinizin işlenme amacını ve
     amacına uygun kullanılıp kullanılmadığını öğrenme,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l2 level1 lfo9;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">kişisel verilerinizin yurt içinde veya
     yurt dışında aktarıldığı üçüncü kişileri bilme,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l2 level1 lfo9;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">kişisel verilerinizin eksik veya yanlış
     işlenmiş ise düzeltilmesini isteme,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l2 level1 lfo9;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Kanun’un 7. maddesinde öngörülen şartlar
     çerçevesinde kişisel verilerinizin silinmesini veya yok edilmesini isteme,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l2 level1 lfo9;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">kişisel verilerinizin yurt içinde veya
     yurt dışında aktarıldığı üçüncü kişilere yukarıda sayılan (d) ve (e)
     bentleri uyarınca yapılan işlemlerin bildirilmesini isteme,</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l2 level1 lfo9;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">kişisel verilerinizin münhasıran otomatik
     sistemler ile analiz edilmesi nedeniyle aleyhinize bir sonucun ortaya
     çıkmasına itiraz etme ve</span></li><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l2 level1 lfo9;
     tab-stops:list .5in"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">kişisel verilerinizin kanuna aykırı
     olarak işlenmesi sebebiyle zarara uğramanız hâlinde zararın giderilmesini
     talep etme</span></li></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">haklarına sahipsiniz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l5 level1 lfo10;
     tab-stops:list .5in"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Haklarınızı Nasıl Kullanabilirsiniz?</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;"></span></li></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Başvuru formu”nu
talebiniz/şikâyetiniz doğrultusunda doldurarak, söz konusu formu iletisim@talentosound.com
adresi üzerinden tarafımıza iletebilir veya formu fiziki olarak
doldurarak&nbsp;</span><em><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Altunizade Mah. Üniversite Sk.
No:8 Üsküdar/İSTANBUL</span></em><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">&nbsp;adresine kargo/posta vasıtasıyla gönderebilirsiniz.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Talebinizi üstte
gösterilen yöntemlerden birisini kullanarak tarafımıza iletmeniz durumunda KVKK
md. 13/2 gereğince, talebiniz en geç 30 gün içinde değerlendirilecek ve
tarafınıza konuyla ilgili bilgi verilecektir. Eğer talebiniz kabul edilirse,
gerekli işlemler derhal veri sorumlusu Şirket tarafından yerine getirilecektir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Talepler kural olarak
ücretsiz karşılanır ancak, talebin gereğini yerine getirmek masraf
gerektiriyorsa “Veri Sorumlusuna Başvuru Usul ve Esasları Hk. Tebliğ” madde
7’de öngörülen;&nbsp;</span><em><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">“İlgili kişinin başvurusuna
yazılı olarak cevap verilecekse, 10 sayfaya kadar ücret alınmaz. 10 sayfanın
üzerindeki her sayfa için 1 TL işlem ücreti alınabilir. Başvuruya cevabın CD,
flash bellek gibi bir kayıt ortamında verilmesi halinde veri sorumlusu tarafından
talep edilebilecek ücret kayıt ortamının maliyetini geçemez.”</span></em><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;hükmü
gereğince Şirket tarafından ücret istenebilecektir.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<ol style="margin-top:0in" start="1" type="1"><li class="MsoNormal" style="color:#212529;text-align:justify;mso-list:l8 level1 lfo11;
     tab-stops:list .5in"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
     mso-bidi-font-family:&quot;Segoe UI&quot;">Veri Sorumlusu ve İrtibat Kişisi</span></strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;"></span></li></ol>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">İşbu Aydınlatma
Metninde ifade edilmiş olduğu üzere Şirket, KVKK gereğince veri sorumlusudur.</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Veri
Sorumlusu Bilgisi</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Açık
Adı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;Talento Sound Eğitim ve
Danışmanlık Hizmetleri Ticaret Limited Şirketi </span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Kısa
Adı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Şirket veya Talento Sound</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Adres&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Altunizade
Mah. Üniversite Sk. No:8 Üsküdar/İSTANBUL</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">İnternet
Sitesi : </span></strong><span lang="TR"><a href="https://kidolog.com/"><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">talentosound.</span></a></span><span class="MsoHyperlink"><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:
&quot;Segoe UI&quot;;color:#007BFF">com.tr</span></span><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">İrtibat
Kişisi</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Adı:&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Ahmet
Beyhan</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Soyadı
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Eşkiler</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Unvanı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
: Operasyon Sorumlusu</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">E-posta&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
: online@talentosound.com</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Telefon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
: 0552 320 94 27</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>',
               ],
               [
                    'user_id' => $superAdmin->user_id,
                    'title' => 'Açık Rıza Beyanı',
                    'slug' => Str::slug('Açık Rıza Beyanı'),
                    'content' => '<!--[if gte mso 9]><xml>
 <o:OfficeDocumentSettings>
  <o:RelyOnVML/>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:View>Normal</w:View>
  <w:Zoom>0</w:Zoom>
  <w:TrackMoves/>
  <w:TrackFormatting/>
  <w:PunctuationKerning/>
  <w:ValidateAgainstSchemas/>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:DoNotPromoteQF/>
  <w:LidThemeOther>TR</w:LidThemeOther>
  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
  <w:Compatibility>
   <w:BreakWrappedTables/>
   <w:SnapToGridInCell/>
   <w:WrapTextWithPunct/>
   <w:UseAsianBreakRules/>
   <w:DontGrowAutofit/>
   <w:SplitPgBreakAndParaMark/>
   <w:EnableOpenTypeKerning/>
   <w:DontFlipMirrorIndents/>
   <w:OverrideTableStyleHps/>
  </w:Compatibility>
  <m:mathPr>
   <m:mathFont m:val="Cambria Math"/>
   <m:brkBin m:val="before"/>
   <m:brkBinSub m:val="&#45;-"/>
   <m:smallFrac m:val="off"/>
   <m:dispDef/>
   <m:lMargin m:val="0"/>
   <m:rMargin m:val="0"/>
   <m:defJc m:val="centerGroup"/>
   <m:wrapIndent m:val="1440"/>
   <m:intLim m:val="subSup"/>
   <m:naryLim m:val="undOvr"/>
  </m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
  DefSemiHidden="false" DefQFormat="false" DefPriority="99"
  LatentStyleCount="376">
  <w:LsdException Locked="false" Priority="0" QFormat="true" Name="Normal"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 1"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 2"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 3"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 9"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 1"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 2"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 3"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 4"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 5"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 6"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 7"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 8"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="header"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footer"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index heading"/>
  <w:LsdException Locked="false" Priority="35" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="caption"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of figures"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope return"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="line number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="page number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of authorities"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="macro"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toa heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 5"/>
  <w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Closing"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Signature"/>
  <w:LsdException Locked="false" Priority="1" SemiHidden="true"
   UnhideWhenUsed="true" Name="Default Paragraph Font"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Message Header"/>
  <w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Salutation"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Date"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Note Heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Block Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Hyperlink"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="FollowedHyperlink"/>
  <w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>
  <w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Document Map"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Plain Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="E-mail Signature"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Top of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Bottom of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal (Web)"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Acronym"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Cite"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Code"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Definition"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Keyboard"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Preformatted"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Sample"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Typewriter"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Variable"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Table"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation subject"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="No List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Contemporary"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Elegant"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Professional"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Balloon Text"/>
  <w:LsdException Locked="false" Priority="39" Name="Table Grid"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Theme"/>
  <w:LsdException Locked="false" SemiHidden="true" Name="Placeholder Text"/>
  <w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>
  <w:LsdException Locked="false" SemiHidden="true" Name="Revision"/>
  <w:LsdException Locked="false" Priority="34" QFormat="true"
   Name="List Paragraph"/>
  <w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
  <w:LsdException Locked="false" Priority="30" QFormat="true"
   Name="Intense Quote"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="19" QFormat="true"
   Name="Subtle Emphasis"/>
  <w:LsdException Locked="false" Priority="21" QFormat="true"
   Name="Intense Emphasis"/>
  <w:LsdException Locked="false" Priority="31" QFormat="true"
   Name="Subtle Reference"/>
  <w:LsdException Locked="false" Priority="32" QFormat="true"
   Name="Intense Reference"/>
  <w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
  <w:LsdException Locked="false" Priority="37" SemiHidden="true"
   UnhideWhenUsed="true" Name="Bibliography"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
  <w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
  <w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
  <w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
  <w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
  <w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
  <w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
  <w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Mention"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Smart Hyperlink"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Hashtag"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Unresolved Mention"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Smart Link"/>
 </w:LatentStyles>
</xml><![endif]--><!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Table Normal";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-parent:"";
	mso-padding-alt:0in 5.4pt 0in 5.4pt;
	mso-para-margin:0in;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-ansi-language:TR;}
</style>
<![endif]-->

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Kişisel
Verilerin Korunması Kanununa İlişkin</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Açık
Rıza Beyanı</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"></span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;</span></p>

<p style="text-align:justify;line-height:21.0pt"><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Talento
Sound Eğitim ve Danışmanlık Hizmetleri Ticaret Limited Şirketi </span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">(bundan böyle </span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;
color:#030349">“Talento Sound”</span></strong><span lang="TR" style="font-family:
&quot;Segoe UI&quot;,sans-serif;color:#030349">&nbsp;olarak anılacaktır.) tarafıma
iletilen Aydınlatma Metni ile işlenecek kişisel veri kategorileri, işlenecek
kişisel veriler, işlenme amaçları, aktarılacağı kişiler, toplanma yöntemleri ve
hukuki sebepleri, veri sorumlusunun kimliği ve sahip olduğum haklar ayrıntılı
ve anlaşılır bir biçimde anlatılmış ve tarafımca söz konusu Aydınlatma Metni
okunmuştur.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">6698 Sayılı Kişisel
Verilerin Korunması Kanunu (</span><strong><span lang="TR" style="font-family:
&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">“KVKK”</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">) ilgili
hükümlerine uygun olarak; Talento Sound tarafından KVKK kapsamında, tarafıma
gerekli bilgilendirmenin yapıldığını, Kişisel Verilerin Korunması Kurul
Kararları ve ilgili mevzuata uygun hazırlanmış Aydınlatma Metni’ni okuduğumu ve
anladığımı; ürün ve hizmetlerini gerçekleştirmek, ürün ve hizmetlerini
geliştirmek, pazarlama ve reklam hizmetlerinde kullanmak, denetim, veri
analizi, istatistiksel çalışma, iş ortakları ile olan ilişkilerin yönetimi, yürütülen
ticari faaliyetlerin gerçekleştirilmesi için ilgili iş birimleri tarafından
gerekli çalışmaların yapılması, yasal yükümlülükleri yerine getirebilmek, talep
halinde ve mevzuat gereği kamu görevlilerine bilgi verebilmek ve doğabilecek
uyuşmazlıklarda delil olarak kullanılmak amacı/ amaçları ile sınırlı olmak
üzere,&nbsp;</span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;
mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">talentosound.com.tr
&nbsp;sistemindeki</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">&nbsp;genel nitelikli kişisel verilerimin (Kullanıcı ad- soyadı,
T.C. kimlik numarası, IBAN, mail, adres, telefon, vergi mükellefi ise firma
adı, vergi numarası, vergi dairesi, ana faaliyet kodu) işlenmesini,
kaydedilmesini, kullanılmasını; <b>(PARAM)</b> </span><strong><span lang="TR" style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#030349">Bir
TURK Elektronik Para A.Ş.</span></strong><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349"> aktarılmasını ve Şirket’in meşru menfaatinin söz konusu olduğu
durumlarda kanunlarda öngörülen sürelere uymak kaydıyla kişisel verilerimin
saklanmasına izin ve onay verdiğimi kabul, beyan ve taahhüt ederim.</span></p>

<p style="text-align:justify;line-height:21.0pt"><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;color:#030349">Ayrıntılı bilgi&nbsp;</span><span lang="TR"><a href="https://kidolog.com/sozlesmeler/aydinlatma-metni"><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">Aydınlatma
Metni</span></a></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">&nbsp;ve&nbsp;</span><span lang="TR"><a href="https://kidolog.com/"><span style="font-family:&quot;inherit&quot;,serif;mso-bidi-font-family:&quot;Segoe UI&quot;;color:#007BFF">KVKK
Politikamıza</span></a></span><span lang="TR" style="font-family:&quot;Segoe UI&quot;,sans-serif;
color:#030349">&nbsp;ulaşabilirsiniz.</span></p>',
               ],
               [
                    'user_id' => $superAdmin->user_id,
                    'title' => 'Talento Sound Danışan Sözleşmesi',
                    'slug' => Str::slug('Talento Sound Danışan Sözleşmesi'),
                    'content' => '<p class="MsoNormal" style="text-align: center; margin: 0cm; font-size: 12pt; font-family: Calibri, sans-serif;"><b>TALENTO SOUND SÖZLEŞME KOŞULLARI<o:p></o:p></b></p><p class="MsoNormal" style="margin: 0cm; font-size: 12pt; font-family: Calibri, sans-serif; text-align: justify;"><b>Madde 1-</b> Bu Sözleşme <b>Talento Psikolojik Danışmanlık ve Değerlendirme Merkezi (Kurum) </b>ile danışan veya danışan yakını arasında Danışanın alacağı <b>TalentoSound</b> modülünün içerik ve ödeme şartlarını belirlemek için imzalanmıştır.<o:p></o:p></p><p class="MsoNormal" style="margin: 0cm; font-size: 12pt; font-family: Calibri, sans-serif; text-align: justify;"><b>Madde 2-</b> Sözleşme ile Kurum satın alınan TalentoSound programının ön testini yapmayı, toplam 42 dinletisini danışanın kullanıcı adı ve şifresi ile giriş yaptığı danışana ait hesaba yüklemeyi ve gerekirse son testini de yaparak danışana bildirmeyi, 6 haftalık TalentoSound modül sürecinde danışana haftalık destek seansları (online veya yüz yüze) vermeye, danışan ise sözleşme bedelini eksiksiz ve zamanında ödemeyi kabul ve taahhüt eder.<o:p></o:p></p><p class="MsoNormal" style="margin: 0cm; font-size: 12pt; font-family: Calibri, sans-serif; text-align: justify;"><b>Madde 3-</b> Uygulama kurumun ve danışanın uygun gördüğü tarihte başlayacak ve danışan günlük dinletilerini eksiksiz dinleyecektir. Programın aksaması eğitimin sonucuna doğrudan etki edeceği için belirlenen günlerde TalentoSound’un haftalık destek seanslarına katılım danışanın asli sorumluluklarındandır ve telafisi yoktur.<o:p></o:p></p><p class="MsoNormal" style="margin: 0cm; font-size: 12pt; font-family: Calibri, sans-serif; text-align: justify;"><b>Madde 4-</b> Programın bedeli ödeme planında belirtilmiştir. Bu bedel programın tamamının alınması halinde oluşan peşin fiyattır. Danışan programın bir kısmını alması, ya da programı tamamlamadan yarıda bırakması durumunda bu sözleşmenin 5. Maddesindeki şartlara göre ödeme yapmayı kabul ve taahhüt eder. TalentoSound modülü için verilen kulaklığı modül bitiminde teslim edeceğini taahhüt eder. 6 hafta içinde dinletiler dinlenmediği, kurallara uyulmadığı tespit edilir ise danışan sözleşme bedelinin tamamını ödemek zorundadır. Ayrıca program sonunda kulaklık kuruma teslim edilmez ise 2.000 TL cezai işlem uygulanacaktır.<o:p></o:p></p><p class="MsoNormal" style="margin: 0cm; font-size: 12pt; font-family: Calibri, sans-serif;"><b>Madde 5-</b> Danışan bu sözleşmeyi ve programı iptal etmek istediğinde;<o:p></o:p></p><p class="MsoListParagraphCxSpFirst" style="margin: 0cm 0cm 0cm 53.25pt; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif; text-indent: -18pt;">-<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Öncelikle iptal talebini yazılı olarak Kurum’a bildirmek zorundadır.<o:p></o:p></p><p class="MsoListParagraphCxSpMiddle" style="margin: 0cm 0cm 0cm 53.25pt; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif; text-indent: -18pt;">-<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Danışan başladığı günden iptal etmek güne kadar olan süreçte danışanın hesabına yüklenen her bir dinleti için 400 TL ödemeyi,<o:p></o:p></p><p class="MsoListParagraphCxSpMiddle" style="margin: 0cm 0cm 0cm 53.25pt; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif; text-indent: -18pt;">-<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Program öncesinde yapılan tanılama ve program oluşturma testleri yapıldı ise her bir test için 400 TL ödemeyi,<o:p></o:p></p><p class="MsoListParagraphCxSpMiddle" style="margin: 0cm 0cm 0cm 53.25pt; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif; text-indent: -18pt;">-<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Haftalık destek seansları için 400 TL ödemeyi kabul ve taahhüt eder.<o:p></o:p></p><p class="MsoListParagraphCxSpMiddle" style="margin: 0cm 0cm 0cm 53.25pt; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif; text-indent: -18pt;">-<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Başladığı günden 4. haftaya kadar Madde 5’te bulunan iptal şartlarına uyularak hesaplama yapılır ve danışana iade gerçekleşir. 4. haftadan sonra iptal ve iade hakkınız bulunmamaktadır.<o:p></o:p></p><p class="MsoListParagraphCxSpMiddle" style="margin: 0cm 0cm 0cm 53.25pt; line-height: normal; font-size: 11pt; font-family: Calibri, sans-serif; text-indent: -18pt; text-align: justify;">-<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Danışanın iptal talebi halinde ödemek zorunda olduğu bedel 17.000 TL’yi geçemez.</p>'
               ]
          ];

          foreach ($pages as $page) {
               Page::create($page);
          }
     }
}
