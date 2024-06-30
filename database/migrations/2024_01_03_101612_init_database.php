<?php

use Brick\Math\BigInteger;
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

        Schema::create("fiscal_year", function (Blueprint $table) {
            $table->id();
            $table->string('year', 4)->unique();
            $table->timestamps();
        });

        Schema::create("user", function (Blueprint $table) {
            $table->string("user_id", 8);
            $table->string("prefix");
            $table->string("username")->unique();
            $table->string("password");
            $table->string("first_name");
            $table->string("last_name");
            $table->enum("gender", ['ชาย', 'หญิง', 'ไม่ระบุ']);
            $table->string("card_code");
            $table->string("image")->nullable();
            $table->enum("role", ['admin', 'powerUser', 'supervisor', 'executive', 'user']);
            $table->boolean("is_active")->default(true);

            $table->primary(['user_id']);
        });

        Schema::create('organization', function (Blueprint $table) {
            $table->string('org_id', 8);
            $table->string('org_name');
            $table->boolean("is_active")->default(true);

            $table->primary(['org_id']);
        });

        Schema::create('sub_organization', function (Blueprint $table) {
            $table->string('sub_org_id', 8);
            $table->string('main_org');
            $table->string('org_name');
            $table->boolean("is_active")->default(true);

            $table->primary(['sub_org_id']);
            $table->foreign("main_org")->references("org_id")->on("organization");
        });

        Schema::create("strategy", function (Blueprint $table) {
            $table->string("stg_id", 8);
            $table->string("name");
            $table->string("desc");
            $table->unsignedBigInteger('year_code')->default(1);
            $table->boolean("is_active")->default(true);

            $table->foreign('year_code')->references('id')->on('fiscal_year');
            $table->primary(['stg_id']);
        });

        Schema::create('budget',function (Blueprint $table) {
            $table->string('budget_id');
            $table->string('stg_id');
            $table->string('name');
            $table->integer('amount');
            
            $table->primary('budget_id');
            $table->foreign('stg_id')->references('stg_id')->on('strategy');
        });
 
        Schema::create('budget_source',function (Blueprint $table) {
            $table->string('budget_source_id');
            $table->string('stg_id');
            $table->string('name');
            $table->integer('amount');
            
            $table->primary('budget_source_id');
            $table->foreign('stg_id')->references('stg_id')->on('strategy');
        });

        Schema::create('target', function (Blueprint $table) {
            $table->string('target_id', 8);
            $table->string('target_name');
            $table->string('stg_id', 8);
            $table->boolean('is_active')->default(true);

            $table->foreign('stg_id')->references('stg_id')->on('strategy');
            $table->primary(['target_id']);
        });

        Schema::create("plan", function (Blueprint $table) {
            $table->string("plan_id", 8);
            $table->string("plan_name")->nullable(false);
            $table->string("stg_id", 8);
            $table->string("target_id", 8);
            $table->enum("type", ['ผลผลิต', 'ผลลัพธ์', 'ผลกระทบ']);
            $table->string("desc")->nullable();
            $table->float("weight", 4, 2);
            $table->boolean("is_active")->default(true);

            $table->foreign("target_id")->references("target_id")->on("target");
            $table->foreign("stg_id")->references("stg_id")->on("strategy");
            $table->primary(['plan_id']);
        });

        Schema::create("project", function (Blueprint $table) {
            $table->string("project_id", 8);
            $table->string("project_name");
            $table->string("plan_id", 8);
            $table->string("executive", 8)->nullable();
            $table->string("advisor", 8)->nullable();
            $table->string("supervisor", 8)->nullable();
            $table->string("project_head", 8);
            $table->string("type");
            $table->string("desc")->nullable();
            $table->integer("balance");
            $table->string("budget_source");
            $table->string("budget_type");
            $table->string("org_id", 8)->nullable();
            $table->float("weight", 4, 2);
            $table->boolean("is_active")->default(true);


            $table->foreign("plan_id")->references("plan_id")->on("plan");
            $table->foreign("executive")->references("user_id")->on("user");
            $table->foreign("advisor")->references("user_id")->on("user");
            $table->foreign("supervisor")->references("user_id")->on("user");
            $table->foreign("project_head")->references("user_id")->on("user");
            $table->primary(["project_id"]);
        });

        Schema::create("activity", function (Blueprint $table) {
            $table->string("act_id", 8);
            $table->string("act_ref", 8)->nullable()->default(null);
            $table->string("act_name");
            $table->string("type");
            $table->string("project_id");
            $table->string("desc");
            $table->integer("balance");
            $table->float("weight", 4, 2);
            $table->boolean("is_active")->default(true);

            $table->foreign("project_id")->references("project_id")->on("project");
            $table->primary(["act_id"]);
        });

        
        Schema::create('balance', function (Blueprint $table) {
            $table->string('balance_id',8);
            $table->enum('type',['ACTIVITY','PROJECT']);
            $table->string('project_id')->nullable();
            $table->string('act_id')->nullable();

            $table->foreign('project_id')->references('project_id')->on('project');
            $table->foreign('act_id')->references('act_id')->on('activity');
            $table->primary('balance_id');
        });

        Schema::create('balance_snapshot', function (Blueprint $table) {
            $table->string('snap_id');
            $table->string('balance_id');
            $table->unsignedInteger('month');
            $table->integer('total')->nullable()->default(null);
            $table->integer('balance1')->nullable()->default(null);
            $table->integer('balance2')->nullable()->default(null);
            $table->integer('balance3')->nullable()->default(null);
            $table->integer('balance4')->nullable()->default(null);
            $table->integer('balance5')->nullable()->default(null);
            $table->integer('balance6')->nullable()->default(null);
            $table->integer('balance7')->nullable()->default(null);
            $table->integer('balance8')->nullable()->default(null);
            $table->integer('balance9')->nullable()->default(null);
            $table->integer('balance10')->nullable()->default(null);
            $table->integer('balance11')->nullable()->default(null);
            $table->integer('balance12')->nullable()->default(null);

            $table->foreign('balance_id')->references('balance_id')->on('balance');
        });


        Schema::create('kpi', function (Blueprint $table) {
            $table->string('kpi_id', 8);
            $table->string('act_id');
            $table->integer('target');
            
            $table->primary(['kpi_id']);
            $table->foreign('act_id')->references('act_id')->on('activity');
        });

        Schema::create('kpi_actual_snapshot', function (Blueprint $table) {
            $table->string('snap_id');
            $table->string('kpi_id');
            $table->unsignedInteger('month');
            $table->integer('acttar1')->nullable()->default(null);
            $table->integer('acttar2')->nullable()->default(null);
            $table->integer('acttar3')->nullable()->default(null);
            $table->integer('acttar4')->nullable()->default(null);
            $table->integer('acttar5')->nullable()->default(null);
            $table->integer('acttar6')->nullable()->default(null);
            $table->integer('acttar7')->nullable()->default(null);
            $table->integer('acttar8')->nullable()->default(null);
            $table->integer('acttar9')->nullable()->default(null);
            $table->integer('acttar10')->nullable()->default(null);
            $table->integer('acttar11')->nullable()->default(null);
            $table->integer('acttar12')->nullable()->default(null);

            $table->primary(['snap_id']);
            $table->foreign('kpi_id')->references('kpi_id')->on('kpi');
        });

        Schema::create('act_comments', function (Blueprint $table) {
            $table->string('act_id', 8)->unique();
            $table->string('comment1')->nullable()->default(null);
            $table->string('comment2')->nullable()->default(null);
            $table->string('comment3')->nullable()->default(null);
            $table->string('comment4')->nullable()->default(null);
            $table->string('comment5')->nullable()->default(null);
            $table->string('comment6')->nullable()->default(null);
            $table->string('comment7')->nullable()->default(null);
            $table->string('comment8')->nullable()->default(null);
            $table->string('comment9')->nullable()->default(null);
            $table->string('comment10')->nullable()->default(null);
            $table->string('comment11')->nullable()->default(null);
            $table->string('comment12')->nullable()->default(null);

            $table->foreign(['act_id'])->references("act_id")->on('activity');
        });

        Schema::create('project_comments', function (Blueprint $table) {
            $table->string('project_id', 8)->unique();
            $table->string('comment',2000)->nullable()->default(null);
            $table->timestamp('commented_on')->useCurrent();

            $table->foreign(['project_id'])->references("project_id")->on('project');
        });

        Schema::create('have_sub_org', function (Blueprint $table) {
            $table->string('user_id', 8);
            $table->string('sub_org_id', 8);

            $table->foreign('user_id')->references('user_id')->on('user')->onDelete("cascade");
            $table->foreign('sub_org_id')->references('sub_org_id')->on('sub_organization')->onDelete("cascade");
        });

        Schema::create('assign_to', function (Blueprint $table) {
            $table->string('user_id', 8);
            $table->string('project_id', 8);
            $table->float('percent');

            $table->foreign('user_id')->references('user_id')->on('user');
            $table->foreign('project_id')->references('project_id')->on('project');
        });

        Schema::create("group", function (Blueprint $table) {
            $table->string("group_id", 8);
            $table->string("editor", 8);
            $table->enum("group_type", ["Plan", "Strategy", "Project", "Activity"]);
            $table->string("group_name");
            $table->json("group_json");

            $table->primary(["group_id"]);
            $table->foreign("editor")->references("user_id")->on('user');
        });

        Schema::create("setting", function (Blueprint $table) {
            $table->string("user_id", 8)->unique();
            $table->json("setting_json");

            $table->foreign("user_id", 8)->references("user_id")->on("user");
        });

        Schema::create("request_close_project", function (Blueprint $table) {
            $table->string("req_id", 8);
            $table->string("project_id", 8);
            $table->string("status");

            $table->foreign("project_id")->references("project_id")->on("project");
            $table->primary(["req_id"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('act_comments');
        
        Schema::dropIfExists('project_comments');
        
        Schema::dropIfExists("request_close_project");

        Schema::dropIfExists('actual_target');

        Schema::dropIfExists('actual_target_snapshot');

        Schema::dropIfExists('have_sub_org');
        
        Schema::dropIfExists('sub_organization');
        
        Schema::dropIfExists('organization');
        
        Schema::dropIfExists('assign_to');
        
        Schema::dropIfExists("group");

        Schema::dropIfExists("setting");

        Schema::dropIfExists('balance_snapshot');
        
        Schema::dropIfExists('balance');

        Schema::dropIfExists("kpi_actual_snapshot");
        
        Schema::dropIfExists("kpi");
                
        Schema::dropIfExists("activity");
        
        Schema::dropIfExists("project");
        
        Schema::dropIfExists("plan");

        Schema::dropIfExists('target');
        
        Schema::dropIfExists('budget');
        
        Schema::dropIfExists('budget_source');

        Schema::dropIfExists("strategy");
        
        Schema::dropIfExists("user");
        
        Schema::dropIfExists("fiscal_year");
    }
};
