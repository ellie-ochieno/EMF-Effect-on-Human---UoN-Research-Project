      <!-- To Handle Simplified SAR Calculations------------  -->
<script>
// ----------Global variables---------------
        // tissues densities in [kg/m^3]
 var skin_tssue_dnsty,
     fat_tssue_dnsty,
     bone_tssue_dnsty,
     brain_tssue_dnsty;

     skin_tssue_dnsty = 1010;
     fat_tssue_dnsty = 920;
     bone_tssue_dnsty = 1850;
     brain_tssue_dnsty = 1040;
          // ------------density----------------

// -------------operating Constants-----------------
  var pi = Math.PI;
          // pi value
  var eo = 8.854187*Math.pow(10, -12);
          // free-sapce Permittivity [F/m]
  var uo = 4*pi*Math.pow(10, -7);
          // free-sapce Permeability [H/m]
  var ur = 1;
          // relative permeability set to unity by default
  var gn = 1;
          // antenna gain set to unity by default
  var co = 3*Math.pow(10, 8);
          // Speed of EM wave in free space [m/s]
  var no = 120*pi;
          // free space x-tic impedance
          // ---------------Constants---------------------

// ------------Technologies handler fns--------------------
          // -------units and actual properties dfn-----
          // fc -center operating frequency [mhz]
          // pt -transmitted Power [W]
          // conductivity units [S/m]
          // density units [Kg/m^3]
          // -------------------------------------------

  var fc,Pt,pt,head_rds,dvc_distance_val,e_field,overal_distance,tsse_condvty_val,ageset,rf_src_distance,
      pwr_dnsty,tissue_impdnc,skin_dpth,sar_val,tissue_type_option,rel_e,tsse_dnsty_val,fspl_val, technology_choice,
      skin_tssue_cndctvty,skin_tssue_pmttvty,
      fat_tssue_cndctvty,fat_tssue_pmttvty,
      bone_tssue_cndctvty,bone_tssue_pmttvty,
      brain_tssue_cndctvty,brain_tssue_pmttvty,
      min_tssue_cndctvty;
        // operating variables declaration

  var head_siz_val,head_siz_optn_val,
      skin_tsse_thcknss,fat_tsse_thcknss,
      bone_tsse_thcknss,brain_tsse_thcknss;
        // tissues thickness handler vars

  var Pt_layer2,Pt_layer3,Pt_layer4;
        // tissues power flow and attenuation;

  var brn_pwr_attenuated,brn_pwr_rcvd1,brn_pwr_rcvd2;
        //brain power

  var skin_sz,fat_sz,bone_sz,brain_sz;
        //tissues size vars

  var skin_sz_pcntg = 1.1111;
  var fat_sz_pcntg = 1.5556;
  var bone_sz_pcntg = 7.3333;
  var brain_sz_pcntg = 90.00;
      //model correlation properties
      //REF(Codra L. Chand Handbook)
      // controller fns---------------------------------------
  function fspl_hndlr(){
    rf_src_distance = rf_source_dstnce;
    technology_choice = technology_type_optn;
        // assigns to imported value
    fc *=Math.pow(10,6);
        // converts to Hz units
    var tx_gain_val, rx_gain_val;
    tx_gain_val = rx_gain_val = 1;
        // tx -sending antenna gain
        // rx -receiving antenna gain
        // all set to unity
    fspl_val = 20 * Math.log10(rf_src_distance) +
                  20 * Math.log10(fc) +
                  20 * Math.log10((4*pi)/co) -
                  tx_gain_val -
                  rx_gain_val;

        // alert(fspl_val);
    var fspl_in_wtts = 1 * Math.pow(10, (fspl_val/10));
        // converts fspl_val to Watts
    if ((technology_choice==="satelite") || (technology_choice==="cellular")) {
      Pt = pt - fspl_in_wtts;
      alert("FSPL: "+fspl_in_wtts+"\nPower tx: "+pt+"\nDistance: "+rf_src_distance);
    }
    else {
      Pt = pt;
    }
  }
        // free space path loss (FSPL) computation fn
  function head_tssue_proprties(){
              // -------tissues radius(from brain center)------
      head_rds = head_siz;
      ageset = ageSet_optn;
              // properties imported from "sar_simplified.php"
      skin_sz = head_rds;
              //skin size dfn i.e 1.11 p.c of total head radius
      fat_sz = (head_rds - ((skin_sz_pcntg / 100) * head_rds));
              //fat size dfn i.e 1.56 p.c of total head radius
      bone_sz = (head_rds - (((skin_sz_pcntg + fat_sz_pcntg) / 100) * head_rds));
              //bone size dfn i.e 7.33 p.c of total head radius
      brain_sz = (head_rds - (((skin_sz_pcntg + fat_sz_pcntg + bone_sz_pcntg) / 100) * head_rds));
              //brain size dfn i.e 90 p.c of total head radius

      skin_tsse_thcknss = head_rds * (skin_sz_pcntg / 100);
      fat_tsse_thcknss = head_rds * (fat_sz_pcntg / 100);
      bone_tsse_thcknss = head_rds * (bone_sz_pcntg / 100);
      brain_tsse_thcknss = head_rds * (brain_sz_pcntg / 100);
          //tissue thickness from head radius
  }
        // tissues properties dfn fn
  function impedance_compute(){
      tissue_type_option = tissue_type;
          // assigns from imported vars from "sar_simplified.php"
      if (tissue_type_option === "Skin") {
        rel_e = skin_tssue_pmttvty;
      }
      if (tissue_type_option === "Fat") {
        rel_e = fat_tssue_pmttvty;
      }
      if (tissue_type_option === "Bone") {
        rel_e = bone_tssue_pmttvty;
      }
      if (tissue_type_option === "Brain") {
        rel_e = brain_tssue_pmttvty;
      }
      // assigns permittivity to specific tissue's imported
        tissue_impdnc = no * Math.sqrt(ur / rel_e);
      //tissue impedance computation
  }
        // computes tissue impedance value
  function skin_dpth_compute(){
      tissue_type_option = tissue_type;
      dvc_distance_val = rf_source_dstnce;
          // assigns from imported vars from "sar_simplified.php"
      if (tissue_type_option === "Skin") {
        tsse_condvty_val = skin_tssue_cndctvty;
      }
      if (tissue_type_option === "Fat") {
        tsse_condvty_val = fat_tssue_cndctvty;
      }
      if (tissue_type_option === "Bone") {
        tsse_condvty_val = bone_tssue_cndctvty;
      }
      if (tissue_type_option === "Brain") {
        tsse_condvty_val = brain_tssue_cndctvty;
      }
        // assigns conductivity to specific tissue'

      // skin_dpth = Math.sqrt(1 / (pi*fc*uo*tsse_condvty_val));
      skin_dpth = Math.sqrt(1 / (pi*fc*uo*min_tssue_cndctvty));
        /*
        ---------------------------------------------------------------
          NOTE: ->Follows Godra Chand model by using min. conductivity
          for skin ddepth computation
        ---------------------------------------------------------------
         */
      overal_distance = dvc_distance_val + skin_dpth;
  }
        // computes tissue skin-depth value
  function pwr_trsmtd_compute(){
      rf_src_distance = rf_source_dstnce;
      technology_choice = technology_type_optn;
      var da = rf_source_dstnce;
              // assigns to imported value
      var new_Pt;
      var trans_pwr_val = pt;
              // initial power value
              // hold power received at the tissue
      var pwr_dpth;
      var dpth = skin_dpth;

      if ((technology_choice==="satelite") || (technology_choice==="cellular" && da > 0)) {
        var tx_gain_val, rx_gain_val;
        tx_gain_val = rx_gain_val = 1;
            // tx -sending antenna gain
            // rx -receiving antenna gain
            // all set to unity
        fspl_val = 20 * Math.log10(da) +
                      20 * Math.log10(fc) +
                      20 * Math.log10((4*pi)/co) -
                      tx_gain_val - rx_gain_val;

        var fspl_in_wtts = 1 * Math.pow(10, (fspl_val/10));
        // converts fspl_val to Watts
        Pt = pt - fspl_in_wtts;
        // alert("FSPL: "+fspl_val+"\nPower tx: "+pt+"\nDistance: "+da+"\nFSPL-W: "+fspl_in_wtts);
      }
      else {
      Pt = pt;
      }
      // alert(fspl_val);
      if(da > 0)  {
          new_Pt = Pt * gn * Math.pow((co /(4*pi*fc*da)), 2);
          Pt = new_Pt;
                  // power transmitted from an antenna at a distance
          pwr_dpth = dpth / 2;
                  // power depth
      }
      if(tissue_type_option === "Brain"){
          if((da > 0))
          {
              Pt = Pt * 0.37;

              if(dpth > brain_tsse_thcknss)
              {
                  Pt_layer4 = trans_pwr_val * Math.exp(dpth / brain_tsse_thcknss);
                  Pt= Pt_layer4 - trans_pwr_val;
              }
                  // new Pt value id power depth is shorter than skin-thickness
          }
          brn_pwr_attenuated = 8.686 * (dpth / brain_sz);
              //power attenuated at the brain in dB
          brn_pwr_rcvd1 = ((Pt*1000)*.095916 )- brn_pwr_attenuated;
              //power received at the brain in dBm
              //'.095916'dBm = 1mW
              //Math.pow(10,((dbm-30)/10))
          brn_pwr_rcvd2 = Math.pow(10, ((brn_pwr_rcvd1-30)/10));
              //power received at the brain in watts
              //1W = 30dBm

          if((dpth > bone_tsse_thcknss) && (tissue_type_option === "Brain") && (da === 0))
          {
              Pt_layer4 = Pt * Math.exp(dpth / brain_tsse_thcknss);
              Pt= Pt_layer4 - trans_pwr_val;
          }
      }
      else if((tissue_type_option === "Skin") || (tissue_type_option === "Fat") || (tissue_type_option === "Bone")){
          if(da > 0)
          {
              if(dpth > skin_tsse_thcknss && tissue_type_option === "Fat")
              {
                  Pt_layer2 = Pt * Math.exp(skin_tsse_thcknss / dpth);
                  Pt= Pt_layer2 - Pt;
              }
              if(dpth > fat_tsse_thcknss && tissue_type_option === "Bone")
              {
                  Pt_layer3 = Pt * Math.exp(fat_tsse_thcknss / dpth);
                  Pt= Pt_layer3 - Pt;
              }
              else if(((dpth <= skin_tsse_thcknss) && (dpth <= fat_tsse_thcknss)) || tissue_type_option === "Skin")
              {
                  Pt= new_Pt;
              }
                      // power dfned after attenuation
          }
          else if(da === 0)
          {
              if(dpth > skin_tsse_thcknss && tissue_type_option === "Fat")
              {
                  Pt_layer2 = Pt * Math.exp(skin_tsse_thcknss / dpth);
                  Pt= Pt_layer2 - trans_pwr_val;
              }
              if(dpth > fat_tsse_thcknss && tissue_type_option === "Bone")
              {
                  Pt_layer3 = Pt * Math.exp(fat_tsse_thcknss / dpth);
                  Pt= Pt_layer3 - trans_pwr_val;
              }
              else if(((dpth <= skin_tsse_thcknss) && (dpth <= fat_tsse_thcknss) ) || tissue_type_option === "Skin")
              {
                  Pt= trans_pwr_val;
              }
                      // initial power value
          }
      }
      pt = Pt;
  }
        // computes power transmitted value
  function pwr_dnsty_compute(){
    if((tissue_type_option === "Skin") || (tissue_type_option === "Fat") || (tissue_type_option === "Bone")){
      if (ageSet_optn === "adult") {
        // pwr_dnsty = (Pt*gn) / (4*pi*Math.pow(overal_distance,2));
        //Power density computation
        if(tissue_type_option === "Skin"){
            pwr_dnsty = (Pt*gn) / (4*pi*Math.pow((overal_distance + skin_tsse_thcknss),2));
            //Power density computation
        }
        if(tissue_type_option === "Fat"){
            pwr_dnsty = (Pt*gn) / (4*pi*Math.pow((overal_distance + (skin_tsse_thcknss + fat_tsse_thcknss)),2));
            //Power density computation
        }
        if(tissue_type_option === "Bone"){
            pwr_dnsty = (Pt*gn) / (4*pi*Math.pow((overal_distance + (skin_tsse_thcknss + fat_tsse_thcknss + bone_tsse_thcknss)),2));
            //Power density computation
        }
      }
      if (ageSet_optn === "infant") {
        if(tissue_type_option === "Skin"){
            pwr_dnsty = (Pt*gn) / (4*pi*Math.pow((overal_distance + skin_tsse_thcknss),2));
            //Power density computation
        }
        if(tissue_type_option === "Fat"){
            pwr_dnsty = (Pt*gn) / (4*pi*Math.pow((overal_distance + (skin_tsse_thcknss + fat_tsse_thcknss)),2));
            //Power density computation
        }
        if(tissue_type_option === "Bone"){
            pwr_dnsty = (Pt*gn) / (4*pi*Math.pow((overal_distance + (skin_tsse_thcknss + fat_tsse_thcknss + bone_tsse_thcknss)),2));
            //Power density computation
        }
      }
    }
    else if(tissue_type_option === "Brain"){
      if (ageSet_optn === "adult") {
        // pwr_dnsty = (Pt*gn) / (4*pi*Math.pow(overal_distance,2));
        pwr_dnsty = (Pt*gn) / (4*pi*Math.pow((overal_distance + (skin_tsse_thcknss + fat_tsse_thcknss + bone_tsse_thcknss + (brain_tsse_thcknss / 2))),2));
        //Power density computation
      }
      if (ageSet_optn === "infant") {
        // pwr_dnsty = (Pt*gn) / (4*pi*Math.pow(brain_sz,2)); //->Follows Godra Chand Model
        pwr_dnsty = (Pt*gn) / (4*pi*Math.pow((overal_distance + (skin_tsse_thcknss + fat_tsse_thcknss + bone_tsse_thcknss + (brain_tsse_thcknss / 2))),2));
          //Power density computation
      }
    }
  }
        // computes tissue power density value
  function e_field_compute(){
      e_field = Math.sqrt(pwr_dnsty * tissue_impdnc);
      //E field computation
  }
        // computes tissue e-field value
  function sar_compute(){
    tissue_type_option = tissue_type;
        // assigns from imported vars from "sar_simplified.php"
    if (tissue_type_option === "Skin") {
      tsse_condvty_val = skin_tssue_cndctvty;
    }
    if (tissue_type_option === "Fat") {
      tsse_condvty_val = fat_tssue_cndctvty;
    }
    if (tissue_type_option === "Bone") {
      tsse_condvty_val = bone_tssue_cndctvty;
    }
    if (tissue_type_option === "Brain") {
      tsse_condvty_val = brain_tssue_cndctvty;
    }
    // assigns tissue conductivity to specific tissues'(imported)

    if (tissue_type_option === "Skin") {
      tsse_dnsty_val = skin_tssue_dnsty;
    }
    if (tissue_type_option === "Fat") {
      tsse_dnsty_val = fat_tssue_dnsty;
    }
    if (tissue_type_option === "Bone") {
      tsse_dnsty_val = bone_tssue_dnsty;
    }
    if (tissue_type_option === "Brain") {
      tsse_dnsty_val = brain_tssue_dnsty;
    }
    // assigns tissue  density to specific tissues'(imported)
    sar_val = (tsse_condvty_val * Math.pow(e_field,2)) / (2*tsse_dnsty_val);
        //computes SAR
  }
        // computes tissue SAR value
  function compute_overall(){
      fc *=Math.pow(10,6);
        // converts to Hz units
      min_tssue_cndctvty = fat_tssue_cndctvty;
        // minimum conductivity value
        // --------call computation fns--------------------
      head_tssue_proprties();
        // tissues properties dfn fn
      impedance_compute();
        // tissue Impedance computation fn
      skin_dpth_compute();
        // tissues SKIN-depth computation fn
      pwr_trsmtd_compute();
        // power transmitted computation fn
      pwr_dnsty_compute();
        // tissues power density computation fn
      e_field_compute();
        // tissues e-field computation fn
      sar_compute();
        // tissues sar computation fn
  }
        // embeds all control computation fns
// controller fns---------------------------------------

        // operations fns---------------------------------------
  function wifi_radio_hndlr(){
    fc = 2400;
    pt = 0.1;
    skin_tssue_cndctvty = 1.440798;
    skin_tssue_pmttvty = 38.062920;
    fat_tssue_cndctvty = 0.102343;
    fat_tssue_pmttvty = 5.285292;
    bone_tssue_cndctvty = 0.586055;
    bone_tssue_pmttvty = 15.008652;
    brain_tssue_cndctvty = 1.481440;
    brain_tssue_pmttvty = 42.609955;
      // vars initialization
    compute_overall();
      // calls all control computation fns
  }   //------------wifi technology------------

  function gsm_module1_hndlr(){
    fc = 902.5;
    pt = 2;
    skin_tssue_cndctvty = 0.867606;
    skin_tssue_pmttvty = 41.392479;
    fat_tssue_cndctvty = 0.051099;
    fat_tssue_pmttvty = 5.461550;
    bone_tssue_cndctvty = 0.242083;
    bone_tssue_pmttvty = 16.616909;
    brain_tssue_cndctvty = 0.767417;
    brain_tssue_pmttvty = 45.795341;
      // vars initialization
    compute_overall();
      // calls all control computation fns
  }   //------------GSM 800/900 technology------------

  function gsm_module2_hndlr(){
    fc = 1950;
    pt = 0.125;
    skin_tssue_cndctvty = 1.244868;
    skin_tssue_pmttvty = 38.639870;
    fat_tssue_cndctvty = 0.083988;
    fat_tssue_pmttvty = 5.332977;
    bone_tssue_cndctvty = 0.468543
    bone_tssue_pmttvty = 15.417418;
    brain_tssue_cndctvty = 1.229834;
    brain_tssue_pmttvty = 43.292542;
      // vars initialization
    compute_overall();
      // calls all control computation fns
  }   //------------GSM 1800/1900 technology------------

  function ntwrk_2G_tchnlgy_hndlr(){
    fc = 1950;
    pt = 0.125;
    skin_tssue_cndctvty = 1.244868;
    skin_tssue_pmttvty = 38.639870;
    fat_tssue_cndctvty = 0.083988;
    fat_tssue_pmttvty = 5.332977;
    bone_tssue_cndctvty = 0.468543
    bone_tssue_pmttvty = 15.417418;
    brain_tssue_cndctvty = 1.229834;
    brain_tssue_pmttvty = 43.292542;
      // vars initialization
    compute_overall();
      // calls all control computation fns
  }   //------------2G Phone network technology------------

  function ntwrk_3G_tchnlgy_hndlr(){
    fc = 2100;
    pt = 0.03125;
    skin_tssue_cndctvty = 1.307517;
    skin_tssue_pmttvty = 38.430779;
    fat_tssue_cndctvty = 0.089856;
    fat_tssue_pmttvty = 5.316868;
    bone_tssue_cndctvty = 0.506602;
    bone_tssue_pmttvty = 15.277436;
    brain_tssue_cndctvty = 1.310172;
    brain_tssue_pmttvty = 43.054611;
      // vars initialization
    compute_overall();
      // calls all control computation fns
  }   //------------3G Phone network technology------------

  function ntwrk_4G_tchnlgy_hndlr(){
    fc = 3500;
    pt = 0.2;
    skin_tssue_cndctvty = 2.024992;
    skin_tssue_pmttvty = 37.005447;
    fat_tssue_cndctvty = 0.155531;
    fat_tssue_pmttvty = 5.173932;
    bone_tssue_cndctvty = 0.906718;
    bone_tssue_pmttvty = 14.112131;
    brain_tssue_cndctvty = 2.223012;
    brain_tssue_pmttvty = 41.154102;
      // vars initialization
    fc *=Math.pow(10,6);
      // converts to Hz units
    min_tssue_cndctvty = fat_tssue_cndctvty;
      // minimum conductivity value

      // --------call computation fns--------------------
    head_tssue_proprties();
      // tissues properties dfn fn
    impedance_compute();
      // tissue Impedance computation fn
    skin_dpth_compute();
      // tissues SKIN-depth computation fn
    pwr_trsmtd_compute();
      // power transmitted computation fn
    pwr_dnsty_compute();
      // tissues power density computation fn
    e_field_compute();
      // tissues e-field computation fn
    sar_compute();
      // tissues sar computation fn

  }   //------------4G Phone network technology------------

  function ntwrk_5G_tchnlgy_hndlr(){
    fc = 3500;
    pt = 0.1;
    skin_tssue_cndctvty = 3.891352;
    skin_tssue_pmttvty = 34.945808;
    fat_tssue_cndctvty = 0.306234;
    fat_tssue_pmttvty = 4.936673;
    bone_tssue_cndctvty = 1.717135;
    bone_tssue_pmttvty = 12.413431;
    brain_tssue_cndctvty = 4.438234;
    brain_tssue_pmttvty = 38.067139;
      // vars initialization
    compute_overall();
      // calls all control computation fns

  }   //------------5G Phone network technology------------

  function bltth_dngl_hndlr(){
    fc = 2400;
    pt = 0.1;
    skin_tssue_cndctvty = 1.440798;
    skin_tssue_pmttvty = 38.062920;
    fat_tssue_cndctvty = 0.102343;
    fat_tssue_pmttvty = 5.285292;
    bone_tssue_cndctvty = 0.586055;
    bone_tssue_pmttvty = 15.008652;
    brain_tssue_cndctvty = 1.481440;
    brain_tssue_pmttvty = 42.609955;
      // vars initialization
    compute_overall();
      // calls all control computation fns

  }   //------------bluetooth technology------------

  function mw_oven_hndlr(){
    fc = 2400;
    pt = 700;
    skin_tssue_cndctvty = 1.440798;
    skin_tssue_pmttvty = 38.062920;
    fat_tssue_cndctvty = 0.102343;
    fat_tssue_pmttvty = 5.285292;
    bone_tssue_cndctvty = 0.586055;
    bone_tssue_pmttvty = 15.008652;
    brain_tssue_cndctvty = 1.481440;
    brain_tssue_pmttvty = 42.609955;
      // vars initialization
    compute_overall();
      // calls all control computation fns

  }   //------------Microwave oven technology------------

  function cellphone_tower_hndlr(){
    fc = 1920;
    pt = 10;
    skin_tssue_cndctvty = 1.232648;
    skin_tssue_pmttvty = 38.684254;
    fat_tssue_cndctvty = 0.082845;
    fat_tssue_pmttvty = 5.336230;
    bone_tssue_cndctvty = 0.461075;
    bone_tssue_pmttvty = 15.445940;
    brain_tssue_cndctvty = 1.214196;
    brain_tssue_pmttvty = 43.341743;
      // vars initialization
    compute_overall();
      // calls all control computation fns

  }   //------------large sized satellite technology------------

  function satellite_large_hndlr(){
    fc = 8500;
    pt = 8;
    skin_tssue_cndctvty = 3.060949;
    skin_tssue_pmttvty = 35.773590;
    fat_tssue_cndctvty = 5.029141;
    fat_tssue_pmttvty = 0.242222;
    bone_tssue_cndctvty = 1.386862;
    bone_tssue_pmttvty = 13.045326;
    brain_tssue_cndctvty = 3.479188;
    brain_tssue_pmttvty = 39.295105;
      // vars initialization
    compute_overall();
      // calls all control computation fns
      // operating frequency range (8 - 9 GHz ->X band)
  }   //------------wifi technology------------

  function satellite_medium_hndlr(){
    fc = 3800;
    pt = 5;
    skin_tssue_cndctvty = 2.210589;
    skin_tssue_pmttvty = 36.752594;
    fat_tssue_cndctvty = 0.171744;
    fat_tssue_pmttvty = 5.144392;
    bone_tssue_cndctvty = 0.999972;
    bone_tssue_pmttvty = 13.886108;
    brain_tssue_cndctvty = 2.453634;
    brain_tssue_pmttvty = 40.777718;
      // vars initialization
    compute_overall();
      // calls all control computation fns
      // operating frequency range (3.4 - 4.2 GHz ->C band)
  }   //------------medium size satellite technology------------

  function satellite_small_hndlr(){
    fc = 11200;
    pt = 10;
    skin_tssue_cndctvty = 3.891352;
    skin_tssue_pmttvty = 34.945808;
    fat_tssue_cndctvty = 0.306234;
    fat_tssue_pmttvty = 4.936673;
    bone_tssue_cndctvty = 1.717135;
    bone_tssue_pmttvty = 12.413431;
    brain_tssue_cndctvty = 4.438234;
    brain_tssue_pmttvty = 38.067139;
      // vars initialization
    compute_overall();
      // calls all control computation fns
      // operating frequency range (10.7 - 11.7 GHz ->KU band)
  }   //------------small sized satellite technology------------

</script>
