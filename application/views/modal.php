<script>
$(document).on('keypress',function(e) {
    if(e.which == 61 || e.which == 43) {
		i = Math.random();
        window.open('<?php echo site_url('window').'?i=';?>'+i,'pagename'+i,'resizable,height=500,width=700,top=20, left=20');
    }
});
document.onkeydown = function(evt) {
    evt = evt || window.event;
    if (evt.keyCode == 27) {
		window.close();
    }
};
</script>
<div class="wrapper wrapper-content  animated fadeInRight">

            <div class="row">
                <div class="col-lg-4">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Inspinia modal window</h5>

                        </div>
                        <div class="ibox-content">
                            <p>
                                Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.
                            </p>
                            <p>
                                To creata a custom Inspinia modal all you have to do is to add <code>.inmodal</code> class to html modal element.
                                Modal contains title, content and footer
                            </p>
                            <div class="text-center">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Launch demo modal
                            </button>
                            
                                </div>
                            <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-laptop modal-icon"></i>
                                            <h4 class="modal-title">Modal title</h4>
                                            <small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                                remaining essentially unchanged.</p>
                                                    <div class="form-group"><label>Sample Input</label> <input type="email" placeholder="Enter your email" class="form-control"></div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Optional sizes</h5>

                        </div>
                        <div class="ibox-content">
                            <p>
                                Modals have two optional sizes, available via modifier classes to be placed on a <code>.modal-dialog</code>
                            </p>

                            <div class="text-center">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">
                                    Large Modal
                                </button>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal6">
                                    Small Modal
                                </button>
                            </div>
                            <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Modal title</h4>
                                            <small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                                remaining essentially unchanged.</p>
                                            <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                                remaining essentially unchanged.</p>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal inmodal fade" id="myModal6" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                                remaining essentially unchanged.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Animation Effect</h5>

                        </div>
                        <div class="ibox-content">
                            <p>
                                You can add any animation effect to your modal window. Just pick up some of the effect from animation page and add it to <code>.modal-content</code> elemente.
                            </p>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
                                FlipInY effect
                            </button>
                            <div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Modal title</h4>
                                            <small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                                remaining essentially unchanged.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">
                                Basic fadeIn effect
                            </button>
                            <div class="modal inmodal" id="myModal4" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-clock-o modal-icon"></i>
                                            <h4 class="modal-title">Modal title</h4>
                                            <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                                                remaining essentially unchanged.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Options</h5>

                        </div>
                        <div class="ibox-content">
                            <p>
                                Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-backdrop=""</code>.
                            </p>

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th style="width: 100px;">Name</th>
                                        <th style="width: 50px;">Type</th>
                                        <th style="width: 50px;">Default</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>backdrop</td>
                                        <td>boolean or the string <code>'static'</code></td>
                                        <td>true</td>
                                        <td>Includes a modal-backdrop element. Alternatively, specify <code>static</code> for a backdrop which doesn't close the modal on click.</td>
                                    </tr>
                                    <tr>
                                        <td>keyboard</td>
                                        <td>boolean</td>
                                        <td>true</td>
                                        <td>Closes the modal when escape key is pressed</td>
                                    </tr>
                                    <tr>
                                        <td>focus</td>
                                        <td>boolean</td>
                                        <td>true</td>
                                        <td>Puts the focus on the modal when initialized.</td>
                                    </tr>
                                    <tr>
                                        <td>show</td>
                                        <td>boolean</td>
                                        <td>true</td>
                                        <td>Shows the modal when initialized.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>



                        </div>
                    </div>
                </div>
            </div>

        </div>