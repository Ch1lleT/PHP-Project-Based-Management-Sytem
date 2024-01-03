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
        // 
        Schema::create("role", function(Blueprint $table){
            $table->id("rold_id");
            $table->string("role_name");
            $table->json("permisson"); // will change
    
            $table->primary(["role_id"]);
        });
        
        Schema::create("user", function(Blueprint $table){
            $table->id("user_id");
            $table->string("prefix");
            $table->string("username")->unique();
            $table->string("password");
            $table->string("first_name");
            $table->string("last_name");
            $table->string("citizen_id");
            $table->string("position");
            $table->string("gender");
            $table->date("date");
            $table->string("card_code");
            $table->string("phone",10);
            $table->string("address");
            $table->foreign("role_id")->references("role_id")->on("role");
            
            $table->primary(['user_id']);
        });
        
        Schema::create("strategy" , function(Blueprint $table){
            $table->id("stg_id");
            $table->string("name");
            $table->string("desc");

            $table->primary(['stg_id']);
        });
        
        Schema::create("plan",function(Blueprint $table){
            $table->id("plan_id");
            $table->string("plan_name")->nullable(false);
            $table->foreign("stg_id")->references("stg_id")->on("Strategy")->onDelete("cascade");
            $table->string("type");
            $table->string("desc")->nullable();
            $table->float("weight");

            $table->primary(['plan_id']);
        });

        Schema::create("project", function(Blueprint $table){
            $table->id("project_id");
            $table->string("project_name");
            $table->foreign("plan_id")->references("role_id")->on("plan");
            $table->foreign("executive")->references("user_id")->on("user");
            $table->foreign("advisor")->references("user_id")->on("user");
            $table->foreign("supervisor")->references("user_id")->on("user");
            $table->foreign("project_head")->references("user_id")->on("user");
            $table->string("type");
            $table->string("desc");
            $table->integer("balance");
            $table->float("weight");


            $table->primary(["project_id"]);
        });
        
        Schema::create("activity", function(Blueprint $table){
            $table->id("act_id");
            $table->string("act_name");
            $table->foreign("project_id")->references("project_id")->on("project");
            $table->string("type");
            $table->string("desc");
            $table->integer("balance");
            $table->float("weight");
            
            $table->primary(["act_id"]);
        });
        
        Schema::create("sub_activity", function(Blueprint $table){
            $table->id("sub_act_id");
            $table->string("sub_act_name");
            $table->foreign("act_id")->references("act_id")->on("activity");
            $table->string("type");
            $table->string("desc");
            $table->integer("balance");
            $table->float("weight");
            
            $table->primary(["sub_act_id"]);
        });

        Schema::create("group", function(Blueprint $table){
            $table->foreign("user_id")->references("user_id")->on("user");
            $table->json("groub_json");
        });
        
        Schema::create("setting", function(Blueprint $table){
            $table->foreign("user_id")->references("user_id")->on("user");
            $table->json("setting_json");
        });
        
        Schema::create("have_role", function(Blueprint $table){
            $table->foreign("user_id")->references("user_id")->on("user");
            $table->foreign("role_id")->references("role_id")->on("role");
        });

        Schema::create("target_kpi", function(Blueprint $table){
            $table->id("targetkpi_id");
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
            $table->id("req_id");
            $table->foreign("act_id")->references("act_id")->on("activity");
            $table->string("approvedby");

            $table->primary("req_id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("user");
        Schema::dropIfExists("strategy");
        Schema::dropIfExists("plan");
        Schema::dropIfExists("group");
        Schema::dropIfExists("setting");
        Schema::dropIfExists("project");
        Schema::dropIfExists("activity");
        Schema::dropIfExists("sub_activity");
        Schema::dropIfExists("role");
        Schema::dropIfExists("have_role");
        Schema::dropIfExists("target_kpi");
        Schema::dropIfExists("target_snapshot");
        Schema::dropIfExists("request_close_activity");
    }
};
