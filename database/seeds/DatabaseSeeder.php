<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // $this->call(CategoriesTableSeeder::class);
        // $this->call(CategoryWebinarTableSeeder::class);
        // $this->call(WebinarsTableSeeder::class);
        $this->call(DataTypesTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);
        // $this->call(FailedJobsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        // $this->call(PagesTableSeeder::class);
        $this->call(UserRolesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        // $this->call(PostsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(TranslationsTableSeeder::class);
        // $this->call(WebinarsTableSeeder::class);
        // $this->call(WebinarContentsTableSeeder::class);
        // $this->call(AuthorsTableSeeder::class);
        // $this->call(PodcastsTableSeeder::class);
        // $this->call(PodcastContentsTableSeeder::class);
        // $this->call(CategoryPodcastTableSeeder::class);
        // $this->call(MigrationsTableSeeder::class);
        // $this->call(GuidelinesTableSeeder::class);
        // $this->call(GuidelineContentsTableSeeder::class);
        // $this->call(CategoryGuidelineTableSeeder::class);
        // $this->call(ArticleCategoryTableSeeder::class);
        // $this->call(ArticleContentsTableSeeder::class);
        // $this->call(ArticlesTableSeeder::class);
        // $this->call(CategoryInterviewTableSeeder::class);
        // $this->call(CategoryNewsTableSeeder::class);
        // $this->call(InterviewContentsTableSeeder::class);
        // $this->call(InterviewsTableSeeder::class);
        // $this->call(NewContentsTableSeeder::class);
        // $this->call(NewsTableSeeder::class);
    }
}
