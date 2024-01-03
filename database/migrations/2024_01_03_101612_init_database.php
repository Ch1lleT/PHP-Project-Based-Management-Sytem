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
        Schema::create('targets', function (Blueprint $table) {
            $table->string('target_id');
            $table->string('target_name');
            $table->string('stg_id');

            $table->foreign('stg_id')->references('stg_id')->on('strategy')->onDelete('cascade');
            $table->primary(['target_id']);
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

        Schema::create('actual_targets', function (Blueprint $table) {
            $table->string('acttarget_id');
            $table->string('acttarget_type');

            $table->primary(['acttarget_id']);
        });

        Schema::create('actual_target_snapshots', function (Blueprint $table) {
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

        Schema::create('balances', function (Blueprint $table) {
            $table->string('balance_id');
            $table->string('balance_type');
            
            $table->primary(['balance_id']);
        });

        Schema::create('balance_snapshots', function (Blueprint $table) {
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

        Schema::create('organizations', function (Blueprint $table) {
            $table->string('org_id');
            $table->string('org_name');

            $table->primary(['org_id']);
        });

        Schema::create('sub_organizations', function (Blueprint $table) {
            $table->string('sub_org_id');
            $table->string('main_org');
            $table->string('org_name');
            
            $table->primary(['sub_org_id']);
        });

        Schema::create('have_orgs', function (Blueprint $table) {
            $table->string('user_id');
            $table->string('org_id');
            
            $table->primary(['user_id', 'org_id']);
        });

        Schema::create('have_sub_orgs', function (Blueprint $table) {
            $table->string('user_id');
            $table->string('sub_org_id');
            
            $table->primary(['user_id', 'sub_org_id']);
        });

        Schema::create('logs', function (Blueprint $table) {
            $table->date('date');
            $table->time('time');
            $table->string('user_id');
            $table->string('action');
            $table->string('desc');
            $table->string('ip');
            
            $table->timestamps();
        });

        Schema::create('assign_tos', function (Blueprint $table) {
            $table->string('user_id');
            $table->string('project_id');
            $table->float('percent');
            
            $table->primary(['user_id', 'project_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('targets');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('actual_targets');
        Schema::dropIfExists('actual_target_snapshots');
        Schema::dropIfExists('balances');
        Schema::dropIfExists('balance_snapshots');
        Schema::dropIfExists('organizations');
        Schema::dropIfExists('sub_organizations');
        Schema::dropIfExists('have_orgs');
        Schema::dropIfExists('have_sub_orgs');
        Schema::dropIfExists('logs');
        Schema::dropIfExists('assign_tos');
    }
};
