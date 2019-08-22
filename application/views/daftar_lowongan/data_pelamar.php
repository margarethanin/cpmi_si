<?php $this->load->view('header'); ?>
 
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Data Pendaftar</a> <a href="#" class="current">Pendaftar</a> </div>
        <h1>Pendaftar Lowongan</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Data Pelamar</h5>
                    </div>
                    <div class="widget-content">
                        <!--content here-->
                        <form id="formSearchPelamar" class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label">Nama Pelamar :</label>
                                <div class="controls">
                                    <input type="text" id="telpPelamar" class="span11" placeholder="Cari berdasarkan nama pelamar" required=""/>
                                </div>
                            </div>
                        </form>
                        <div id="showPelamar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('footer'); ?>
<script>
    //event ketika FORM SEARCH DITEKAN ENTER (untuk submit)
    $("#formSearchPelamar").submit(function(e){
        e.preventDefault();
        var telp = $("#telpPelamar").val(); // sama kayak kalo di php itu = $this->input->post
        var url = "<?php echo site_url('Pendaftar/data_pelamar_show/');?>" + telp;
        $("#showPelamar").load(url);
    });
</script>