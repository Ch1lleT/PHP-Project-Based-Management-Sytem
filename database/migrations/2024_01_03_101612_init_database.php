<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create("role", function(Blueprint $table){
            $table->string("role_id");
            $table->string("role_name");
    
            $table->primary(["role_id"]);
        });
        
        Schema::create("user", function(Blueprint $table){
            $table->string("user_id");
            $table->string("prefix");
            $table->string("username")->unique();
            $table->string("password");
            $table->string("first_name");
            $table->string("last_name");
            $table->string("citizen_id");
            $table->string("position");
            $table->string("gender");
            $table->date("birth_date");
            $table->string("card_code");
            $table->string("phone",10);
            $table->string("address");
            $table->string("role_id");
            $table->boolean("is_active");


            $table->foreign("role_id")->references("role_id")->on("role");
            // $table->index("user_id");
            $table->primary(['user_id']);
        });
        
        Schema::create('comments', function (Blueprint $table) {
            $table->string('act_id');
            $table->string('comment01');
            $table->string('comment02');
            $table->string('comment03');
            $table->string('comment04');
            $table->string('comment05');
            $table->string('comment06');
            $table->string('comment07');
            $table->string('comment08');
            $table->string('comment09');
            $table->string('comment10');
            $table->string('comment11');
            $table->string('comment12');

            $table->primary(['act_id']);
        });

        Schema::create('actual_target', function (Blueprint $table) {
            $table->string('acttarget_id');
            $table->string('acttarget_type');

            $table->primary(['acttarget_id']);

        });

        Schema::create('actual_target_snapshot', function (Blueprint $table) {
            $table->string('snap_id');
            $table->integer('month');
            $table->integer('acttar01');
            $table->integer('acttar02');
            $table->integer('acttar03');
            $table->integer('acttar04');
            $table->integer('acttar05');
            $table->integer('acttar06');
            $table->integer('acttar07');
            $table->integer('acttar08');
            $table->integer('acttar09');
            $table->integer('acttar10');
            $table->integer('acttar11');
            $table->integer('acttar12');

            $table->primary(['snap_id']);

        });

        Schema::create('balance', function (Blueprint $table) {
            $table->string('balance_id');
            $table->string('balance_type');
            
            $table->primary(['balance_id']);
        });

        Schema::create('balance_snapshot', function (Blueprint $table) {
            $table->string('snap_id');
            $table->integer('month');
            $table->integer('balance01');
            $table->integer('balance02');
            $table->integer('balance03');
            $table->integer('balance04');
            $table->integer('balance05');
            $table->integer('balance06');
            $table->integer('balance07');
            $table->integer('balance08');
            $table->integer('balance09');
            $table->integer('balance10');
            $table->integer('balance11');
            $table->integer('balance12');

            $table->primary(['snap_id']);
        });

        Schema::create('organization', function (Blueprint $table) {
            $table->string('org_id');
            $table->string('org_name');
            $table->boolean("is_active");

            $table->primary(['org_id']);
        });

        Schema::create('sub_organization', function (Blueprint $table) {
            $table->string('sub_org_id');
            $table->string('main_org');
            $table->string('org_name');
            $table->boolean("is_active");
            
            $table->primary(['sub_org_id']);
        });

        Schema::create("strategy" , function(Blueprint $table){
            $table->string("stg_id");
            $table->string("name");
            $table->string("desc");
            $table->boolean("is_active");

            $table->primary(['stg_id']);
        });
        
        Schema::create("plan",function(Blueprint $table){
            $table->string("plan_id");
            $table->string("plan_name")->nullable(false);
            $table->string("stg_id");
            $table->string("type");
            $table->string("desc")->nullable();
            $table->float("weight");
            $table->boolean("is_active");
            
            $table->foreign("stg_id")->references("stg_id")->on("strategy");
            $table->primary(['plan_id']);
        });

        Schema::create("project", function(Blueprint $table){
            $table->string("project_id");
            $table->string("project_name");
            $table->string("plan_id");
            $table->string("executive")->nullable();
            $table->string("advisor")->nullable();
            $table->string("supervisor")->nullable();
            $table->string("project_head");
            $table->string("type");
            $table->string("desc")->nullable();
            $table->integer("balance");
            $table->float("weight");
            $table->boolean("is_active")->default(true);
            
            
            $table->foreign("plan_id")->references("plan_id")->on("plan");
            $table->foreign("executive")->references("user_id")->on("user");
            $table->foreign("advisor")->references("user_id")->on("user");
            $table->foreign("supervisor")->references("user_id")->on("user");
            $table->foreign("project_head")->references("user_id")->on("user");
            $table->primary(["project_id"]);
        });

        Schema::create("activity", function(Blueprint $table){
            $table->string("act_id");
            $table->string("act_ref")->nullable()->default(null);
            $table->string("act_name");
            $table->string("type");
            $table->string("project_id");
            $table->string("desc");
            $table->integer("balance");
            $table->float("weight");
            $table->boolean("is_active");
            
            $table->foreign("project_id")->references("project_id")->on("project");
            $table->primary(["act_id"]);
        });

        Schema::create('have_sub_org', function (Blueprint $table) {
            $table->string('user_id');
            $table->string('sub_org_id');
            
            $table->foreign('user_id')->references('user_id')->on('user');
            $table->foreign('sub_org_id')->references('sub_org_id')->on('sub_organization');
        });

        Schema::create('log', function (Blueprint $table) {
            $table->date('date');
            $table->time('time');
            $table->string('user_id');
            $table->string('action');
            $table->string('desc');
            $table->string('ip');
            $table->timestamps();

            $table->foreign("user_id")->references("user_id")->on('user');
        });

        Schema::create('assign_to', function (Blueprint $table) {
            $table->string('user_id');
            $table->string('project_id');
            $table->float('percent');
            
            $table->foreign('user_id')->references('user_id')->on('user');
            $table->foreign('project_id')->references('project_id')->on('project');
        });

        Schema::create("group", function(Blueprint $table){
            $table->string("group_id");
            $table->string("editor");
            $table->string("group_type");
            $table->string("group_name");
            $table->json("group_json");

            $table->primary(["group_id"]);
        });
        
        Schema::create("setting", function(Blueprint $table){
            $table->string("user_id");
            $table->json("setting_json");

            $table->foreign("user_id")->references("user_id")->on("user");
        });
        
        Schema::create("have_role", function(Blueprint $table){
            $table->string('user_id');
            $table->string('role_id');
            
            $table->foreign("user_id")->references("user_id")->on("user");
            $table->foreign("role_id")->references("role_id")->on("role");
        });

        Schema::create('target', function (Blueprint $table) {
            $table->string('target_id');
            $table->string('target_name');
            $table->string('stg_id');

            $table->foreign('stg_id')->references('stg_id')->on('strategy');
            $table->primary(['target_id']);
        });


        Schema::create("target_kpi", function(Blueprint $table){
            $table->string("targetkpi_id");
            $table->string("targetkpi_type");

            $table->primary(["targetkpi_id"]);
        });

        Schema::create("target_snapshot", function(Blueprint $table){
            $table->string("snap_id"); // composit key from targetkpi_type + targetkpi_id
            $table->integer("month",false,true);
            $table->integer("target1");
            $table->integer("target2");
            $table->integer("target3");
            $table->integer("target4");
            $table->integer("target5");
            $table->integer("target6");
            $table->integer("target7");
            $table->integer("target8");
            $table->integer("target9");
            $table->integer("target10");
            $table->integer("target11");
            $table->integer("target12");

        });

        Schema::create("request_close_activity", function(Blueprint $table){
            $table->string("req_id");
            $table->string("act_id");
            $table->string("approvedby");
            
            $table->foreign("act_id")->references("act_id")->on("activity");
            $table->primary(["req_id"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('target');

        Schema::dropIfExists('comments');
        
        Schema::dropIfExists('actual_target');

        Schema::dropIfExists('actual_target_snapshot');

        Schema::dropIfExists('balance');

        Schema::dropIfExists('balance_snapshot');
        
        Schema::dropIfExists('organization');
        
        Schema::dropIfExists('have_sub_org');
        
        Schema::dropIfExists('sub_organization');
        
        Schema::dropIfExists('log');
        
        Schema::dropIfExists('assign_to');
        
        Schema::dropIfExists("group");
        
        Schema::dropIfExists("setting");
                
        Schema::dropIfExists("have_role");
        
        Schema::dropIfExists("target_kpi");
        
        Schema::dropIfExists("target_snapshot");
        
        Schema::dropIfExists("request_close_activity");
        
        Schema::dropIfExists("activity");
        
        Schema::dropIfExists("project");
        
        Schema::dropIfExists("plan");
        
        Schema::dropIfExists("strategy");
        
        Schema::dropIfExists("user");
        
        Schema::dropIfExists("role");
    }
};

