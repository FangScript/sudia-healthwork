# Deploy Laravel to Vercel - Complete Guide

## Prerequisites

1. **Vercel Account**: Sign up at [vercel.com](https://vercel.com)
2. **Vercel CLI**: Install with `npm i -g vercel`
3. **Git Repository**: Your code should be in a Git repository (GitHub, GitLab, etc.)

## Files Created for Vercel Deployment

✅ `vercel.json` - Vercel configuration
✅ `api/index.php` - Serverless function entry point
✅ `build.sh` - Build script
✅ `.env.vercel` - Environment variables template

## Deployment Steps

### Method 1: Deploy via Vercel CLI

1. **Login to Vercel**:
   ```bash
   vercel login
   ```

2. **Deploy from project directory**:
   ```bash
   vercel
   ```

3. **Follow the prompts**:
   - Set up and deploy? `Y`
   - Which scope? (choose your account)
   - Link to existing project? `N`
   - What's your project's name? `your-laravel-app`
   - In which directory is your code located? `./`

4. **Production deployment**:
   ```bash
   vercel --prod
   ```

### Method 2: Deploy via Vercel Dashboard

1. **Connect Git Repository**:
   - Go to [vercel.com/dashboard](https://vercel.com/dashboard)
   - Click "New Project"
   - Import your Git repository

2. **Configure Project**:
   - Framework Preset: "Other"
   - Root Directory: `./` (if app is in root) or `./app` (if app is in app folder)
   - Build Command: `./build.sh` (or let Vercel use the command from vercel.json)
   - Output Directory: `public`

3. **Set Environment Variables** (in Vercel Dashboard):
   ```
   APP_NAME=YourAppName
   APP_ENV=production
   APP_KEY=base64:YourGeneratedKey
   APP_DEBUG=false
   APP_URL=https://your-app.vercel.app
   LOG_CHANNEL=stderr
   DB_CONNECTION=sqlite
   SESSION_DRIVER=cookie
   CACHE_STORE=file
   QUEUE_CONNECTION=sync
   ```

## Important Configuration Notes

### Database Configuration

For Vercel, you have several options:

1. **SQLite** (Simplest for small apps):
   ```
   DB_CONNECTION=sqlite
   DB_DATABASE=/tmp/database.sqlite
   ```

2. **External MySQL/PostgreSQL**:
   ```
   DB_CONNECTION=mysql
   DB_HOST=your-db-host.com
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

3. **PlanetScale** (Recommended):
   ```
   DB_CONNECTION=mysql
   DB_HOST=aws.connect.psdb.cloud
   DB_DATABASE=your-database
   DB_USERNAME=your-username
   DB_PASSWORD=your-password
   ```

### Session & Cache Configuration

For serverless environments, use:
- **Sessions**: `cookie` driver (stateless)
- **Cache**: `file` driver or external Redis
- **Queue**: `sync` for immediate processing or external queue service

### File Storage

Vercel's serverless functions have read-only filesystem except for `/tmp`. For file uploads:
- Use external storage (AWS S3, Cloudinary)
- Configure in `config/filesystems.php`

## Environment Variables Setup

Set these in Vercel Dashboard > Project Settings > Environment Variables:

| Variable | Value | Notes |
|----------|--------|-------|
| `APP_KEY` | base64:your-key | Generate with `php artisan key:generate --show` |
| `APP_ENV` | production | Always set to production |
| `APP_DEBUG` | false | Never true in production |
| `APP_URL` | https://your-app.vercel.app | Your Vercel domain |
| `LOG_CHANNEL` | stderr | For Vercel logging |
| `SESSION_DRIVER` | cookie | Serverless compatible |
| `CACHE_STORE` | file | Or external cache service |
| `QUEUE_CONNECTION` | sync | Or external queue service |

## Troubleshooting

### Common Issues & Solutions

1. **500 Internal Server Error**:
   - Check Vercel Function Logs
   - Verify `APP_KEY` is set correctly
   - Ensure storage directories exist

2. **Database Connection Issues**:
   - For SQLite: Database file is created in `/tmp` (temporary)
   - For external DB: Verify connection credentials
   - Run migrations manually if needed

3. **Asset Loading Issues**:
   - Ensure `npm run build` completed successfully
   - Check `public/build` directory exists
   - Verify Vite configuration

4. **Permission Errors**:
   - Vercel functions are read-only except `/tmp`
   - Use external storage for file uploads
   - Cache and logs go to `/tmp`

### Debugging Commands

```bash
# Check deployment logs
vercel logs your-deployment-url

# Test locally
vercel dev

# Check function output
vercel inspect your-deployment-url
```

## Performance Optimization

1. **Cold Start Optimization**:
   - Minimize dependencies
   - Use `--optimize-autoloader`
   - Cache configuration files

2. **Database Optimization**:
   - Use connection pooling
   - Implement query caching
   - Consider read replicas

3. **Asset Optimization**:
   - Enable Vite build optimizations
   - Use CDN for static assets
   - Implement proper caching headers

## Post-Deployment Checklist

- [ ] Test all application routes
- [ ] Verify database connections
- [ ] Check email functionality
- [ ] Test file uploads (if any)
- [ ] Monitor function execution times
- [ ] Set up custom domain (optional)
- [ ] Configure monitoring alerts

## Custom Domain Setup

1. In Vercel Dashboard → Domains
2. Add your custom domain
3. Configure DNS records as instructed
4. Update `APP_URL` environment variable

## Monitoring & Maintenance

1. **Vercel Analytics**: Enable in project settings
2. **Error Tracking**: Consider Sentry integration
3. **Performance Monitoring**: Use Vercel's built-in metrics
4. **Regular Updates**: Keep Laravel and dependencies updated

## Cost Considerations

- Vercel Hobby plan: Free with limits
- Pro plan: $20/month for higher limits
- Function execution time limits apply
- Consider external services for database and storage

Your Laravel application is now ready for Vercel deployment! 🚀 