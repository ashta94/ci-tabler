<div class="modal fade" id="sample_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal Sample</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">

        <form class="p-4" onsubmit="return createData(this)" style="display:none" id="form">
          <div class="form-group">
            <label class="form-label">Name</label>
            <div class="input-icon">
              <span class="input-icon-addon">
                <i class="fe fe-user"></i>
              </span>
              <input type="text" class="form-control" placeholder="Name" name="name">
            </div>
          </div>

          <div class="form-group">
            <label class="form-label">Date of Birth</label>
            <div class="input-icon">
              <span class="input-icon-addon">
                <i class="fe fe-calendar"></i>
              </span>
              <input type="date" class="form-control">
            </div>
          </div>

          <div class="btn-group">
            <button type="button" class="btn btn-outline-secondary no-otl" onclick="$('#tbl').slideDown(300); $('#form').slideUp(300);"><i class="fe fe-x"></i></button>
            <button type="submit" class="btn btn-outline-secondary no-otl"><i class="fe fe-save"></i> Save</button>
          </div>

        </form>

        <div class="table-responsive" style="overflow:auto; height:370px" id="tbl">
          <table class="table card-table table-striped table-vcenter">
            <tbody>

              <?php
                $users = $this->mod->getData('tb_users')->result_array();
                foreach ($users as $key => $value) {
                  echo "
                  <tr>
                    <td class='w-1'><span class='avatar' style=''>XX</span></td>
                    <td>$value[nama]</td>
                    <td class='text-nowrap'>May 6, 2018</td>
                    <td class='text-right'>
                      <div class='btn-group'>
                        <a href='#' class='btn btn-sm btn-outline-secondary no-otl'><i class='fe fe-edit-2'></i></a>
                        <a href='#' class='btn btn-sm btn-outline-secondary no-otl' onclick='del(this, $value[id])'><i class='fe fe-trash'></i></a>
                      </div>
                    </td>
                  </tr>";
               } ?>

            </tbody>
          </table>
        </div>

      </div>
      <div class="bt p-3" align="right">
        <div class="btn-group pull-left">
          <button type="button" class="btn btn-outline-primary no-otl" onclick="$('#form').slideDown(300); $('#tbl').slideUp(300);"> <i class="fe fe-plus"></i> </button>
        </div>

        <div class="btn-group">
          <button type="button" class="btn btn-outline-primary no-otl" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-outline-primary no-otl">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
