<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <BreezeAuthenticatedLayout>
        <div class="container-fluid">
            <!-- Add Order -->
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Create</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Client</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Clients</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form>
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control input-default " placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control input-rounded" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control input-default " placeholder="password">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="Country" class="form-control input-default " placeholder="country">
                                    </div>

                                    <input type="hidden" name="count" value="1" />
                                    <div class="control-group" id="fields">
                                        <label class="control-label" for="field1"></label>
                                        <div class="controls" id="profs">
                                            <div id="field">
                                                <input autocomplete="off" class="input form-control" id="field1" name="prof1" type="text" placeholder="Brands" data-items="8"/>
                                                <button id="b1" class="btn add-more" type="button">+</button>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4"></div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>


<script>
   $(document).ready(function(){
    var next = 1;
        $(".add-more").click(function(e){
            e.preventDefault();
            var addto = "#field" + next;
            var addRemove = "#field" + (next);
            next = next + 1;
            var newIn = '<input autocomplete="off" class="input form-control" id="field' + next + '" name="field' + next + '" type="text">';
            var newInput = $(newIn);
            var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
            var removeButton = $(removeBtn);
            $(addto).after(newInput);
            $(addRemove).after(removeButton);
            $("#field" + next).attr('data-source',$(addto).attr('data-source'));
            $("#count").val(next);

                $('.remove-me').click(function(e){
                    e.preventDefault();
                    var fieldNum = this.id.charAt(this.id.length-1);
                    var fieldID = "#field" + fieldNum;
                    $(this).remove();
                    $(fieldID).remove();
                });
        });
    });

    $(document).ready(function(){
    var next = 1;
        $(".add-moretow").click(function(e){
            e.preventDefault();
            var addto = "#fieldtwo" + next;
            var addRemove = "#fieldtwo" + (next);
            next = next + 1;
            var newIn = '<input autocomplete="off" class="inputs form-control" id="fieldtwo' + next + '" name="fields' + next + '" type="text">';
            var newInput = $(newIn);
            var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-metow" >-</button></div><div id="fieldtwo">';
            var removeButton = $(removeBtn);
            $(addto).after(newInput);
            $(addRemove).after(removeButton);
            $("#fieldtwo" + next).attr('data-source',$(addto).attr('data-source'));
            $("#count").val(next);

                $('.remove-metow').click(function(e){
                    e.preventDefault();
                    var fieldNum = this.id.charAt(this.id.length-1);
                    var fieldID = "#fieldtwo" + fieldNum;
                    $(this).remove();
                    $(fieldID).remove();
                });
        });
    });

</script>
