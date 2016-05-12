<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row font-wow" style="margin-top: 25px">
            <div class="col-md-12">
                <div class="col-md-6" >
                    <label style="font-size: 15px" for="form_message">Mensaje</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="No mas de 60 caracteres..." rows="2" required="required"></textarea>

                    <div style="margin-top: 10px"></div>
                    <!-- elegir el adecuado segun la cantidad de caracteres -->
                    <span class="label label-success">0/60</span>
                    <span class="label label-warning">50/60</span>
                    <span class="label label-danger">61/60</span>
                </div>

                <div class="col-md-6">
                    <label style="font-size: 15px" for="form_phone">Telefono</label>
                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="+521 XXX - XXXXXXX">
                </div>
            </div>

            <div style="margin-top: 20px" class="col-md-12 text-center">
                <input type="submit" class="btn btn-success btn-send" value="Send message">
            </div>
        </div>

            <!-- /.col-lg-12 -->
    </div>
        <!-- /.row -->
</div>
    <!-- /.container-fluid -->
</div>
